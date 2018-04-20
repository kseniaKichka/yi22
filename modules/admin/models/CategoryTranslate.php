<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 20.04.18
 * Time: 13:03
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class CategoryTranslate extends ActiveRecord {

    public function rules() {
        return [
            [['title', 'summary'], 'required'],
            ['title', 'string'],
            ['language', 'string'],
            ['language', 'default', 'value' => 'en'],
            ['summary', 'string'],
            ['id_category', 'integer'],
        ];
    }

    public static function tableName() {
        return '{{%categoryBlogTranslate}}';
    }

    public static function findById($id) {
        return static::findOne(['id_category' => $id]);
    }

    public static function findNameById($id) {
        return static::findAll([
            'id_category' => $id,
            'value' => self::FIELD_NAME
        ]);
    }

    public static function findManager() {
        return static::find()
            ->all();
    }
}