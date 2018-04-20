<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 19.04.18
 * Time: 15:27
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class Tag extends ActiveRecord {

    const STATUS_ACTIVE = 1;
    const STATUS_NOT_ACTIVE = 0;

    public static function tableName() {
        return '{{%tagsBlog}}';
    }

    public function rules() {
        return [
            [['idAuthor'], 'required'],
            [['active'], 'required'],
            [['idAuthor'], 'integer'],
            ['active', 'integer'],
        ];
    }

    public function getTags() {
        return self::find()
            ->joinWith('tagTranslate')
            ->where([
//                self::tableName().'.active' => self::STATUS_ACTIVE,
                TagTranslate::tableName().'.language' => 'en'
            ])
            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();
    }

    public function getTag($alias) {
        return self::find()
            ->joinWith('tagTranslate')
            ->joinWith('userData')
            ->where([
                self::tableName().'.active' => self::STATUS_ACTIVE,
                TagTranslate::tableName().'.language' => 'en',
                self::tableName().'.alias' => $alias,
            ])
            ->all();

    }

    public static function findByAlias($alias) {
        return static::findOne(['alias' => $alias]);
    }

    public function getTagTranslate() {
        return $this->hasOne(TagTranslate::className(), ['id_tag' => 'id']);
    }

    public function getUserData() {
        return $this->hasOne(UserData::className(), ['id_user' => 'idAuthor']);
    }

    public function getNameAuthor() {
        return ArrayHelper::getValue($this, 'userData.name'). ' ' .ArrayHelper::getValue($this, 'userData.soname');
    }

    public function setAlias($alias) {
        return str_replace(array(' ', '#'), '_', strtolower($alias));
    }

    public static function findManager() {
        return static::find()
            ->all();
    }
}