<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 19.04.18
 * Time: 15:29
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class TagTranslate extends ActiveRecord {

    public function rules() {
        return [
            [['title', 'summary'], 'required'],
            ['title', 'string'],
            ['language', 'string'],
            ['language', 'default', 'value' => 'en'],
            ['summary', 'string'],
            ['id_tag', 'integer'],
        ];
    }

    public static function tableName() {
        return '{{%tagsBlogTranslate}}';
    }

    public static function findById($id) {
        return static::findOne(['id_tag' => $id]);
    }

    public static function findNameById($id) {
        return static::findAll([
            'id_tag' => $id,
            'value' => self::FIELD_NAME
        ]);
    }

    public static function findManager() {
        return static::find()
            ->all();
    }
}