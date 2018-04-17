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

    public $name;
    public $summary;
    public $text;
    const FIELD_NAME = 'name';
    const FIELD_SUMMARY = 'summary';
    const FIELD_TEXT = 'text';

    public function rules() {
        return [
            [['name', 'summary', 'text'], 'required'],
            ['translate', 'string'],
            ['language', 'string'],
            ['value', 'string'],
            ['id_post', 'integer'],
        ];
    }

    public static function tableName() {
        return '{{%translate}}';
    }

    public static function findById($id) {
        return static::findAll(['id_post' => $id]);
    }

    public static function findNameById($id) {
        return static::findAll([
            'id_post' => $id,
            'value' => self::FIELD_NAME
        ]);
    }
}