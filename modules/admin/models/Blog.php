<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:45
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;
use app\modules\admin\models\Translate;
use yii\helpers\ArrayHelper;

class Blog extends ActiveRecord {

    const STATUS_ACTIVE = 1;
    const STATUS_NOT_ACTIVE = 0;
//    public $text;
//    public $summary;
//    public $name;
    public $nameAuthor;
//    public $active;

    public static function tableName() {
        return '{{%postBlog}}';
    }

    public function rules() {
        return [
            [['idAuthor', 'id_category'], 'required'],
            [['active'], 'required'],
            [['idAuthor', 'id_category'], 'integer'],
            ['active', 'integer'],
        ];
    }

    public function getPosts() {
        return self::find()
            ->joinWith('translate')
            ->where([
//                self::tableName().'.active' => self::STATUS_ACTIVE,
                Translate::tableName().'.language' => 'en'
            ])

            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();
    }

    public function getPost($alias) {
        return self::find()
            ->joinWith('translate')
            ->joinWith('userData')
            ->where([
                self::tableName().'.active' => self::STATUS_ACTIVE,
                Translate::tableName().'.language' => 'en',
                self::tableName().'.alias' => $alias,
            ])
            ->all();

    }

    public static function findByAlias($alias) {
        return static::findOne(['alias' => $alias]);
    }

    public function getTranslate() {
        return $this->hasMany(Translate::className(), ['id_post' => 'id']);
    }

    public function getUserData() {
        return $this->hasOne(UserData::className(), ['id_user' => 'idAuthor']);
    }

    public function getNameAuthor() {
        return ArrayHelper::getValue($this, 'userData.name'). ' ' .ArrayHelper::getValue($this, 'userData.soname');
    }
}