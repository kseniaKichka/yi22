<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 20.04.18
 * Time: 12:58
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord {

    const STATUS_ACTIVE = 1;
    const STATUS_NOT_ACTIVE = 0;
//    public $text;
//    public $summary;
//    public $name;
    public $nameAuthor;
//    public $active;

    public static function tableName() {
        return '{{%categoryBlog}}';
    }

    public function rules() {
        return [
            [['idAuthor'], 'required'],
            [['active'], 'required'],
            [['idAuthor'], 'integer'],
            ['active', 'integer'],
        ];
    }

    public function getCategories() {
        return self::find()
            ->joinWith('categoryTranslate')
            ->where([
//                self::tableName().'.active' => self::STATUS_ACTIVE,
                CategoryTranslate::tableName().'.language' => 'en'
            ])

            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();
    }

    public function getPost($alias) {
        return self::find()
            ->joinWith('categoryTranslate')
            ->joinWith('userData')
            ->where([
                self::tableName().'.active' => self::STATUS_ACTIVE,
                CategoryTranslate::tableName().'.language' => 'en',
                self::tableName().'.alias' => $alias,
            ])
            ->all();

    }

    public static function findByAlias($alias) {
        return static::findOne(['alias' => $alias]);
    }

    public function getCategoryTranslate() {
        return $this->hasMany(CategoryTranslate::className(), ['id_category' => 'id']);
    }

    public function getUserData() {
        return $this->hasOne(UserData::className(), ['id_user' => 'idAuthor']);
    }

    public function setAlias($alias) {
        return str_replace(array(' ', '#'), '_', strtolower($alias));
    }

    public function getNameAuthor() {
        return ArrayHelper::getValue($this, 'userData.name'). ' ' .ArrayHelper::getValue($this, 'userData.soname');
    }
}