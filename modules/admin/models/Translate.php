<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 16.04.18
 * Time: 10:59
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class Translate extends ActiveRecord {

//    public $name;
//    public $summary;
//    public $text;

    public function rules() {
        return [
            [['title', 'summary', 'text'], 'required'],
            ['title', 'string'],
            ['language', 'string'],
            ['language', 'default', 'value' => 'en'],
            ['summary', 'string'],
            ['text', 'string'],
            ['id_post', 'integer'],
        ];
    }

    public static function tableName() {
        return '{{%translate}}';
    }

    public static function findById($id) {
        return static::findOne(['id_post' => $id]);
    }

    public static function findNameById($id) {
        return static::findAll([
            'id_post' => $id,
            'value' => self::FIELD_NAME
        ]);
    }
}