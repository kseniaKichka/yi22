<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 17.04.18
 * Time: 10:30
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class UserData extends ActiveRecord {

//    public $id_user;

    public function rules() {
        return [
            ['soname', 'required'],
            ['soname', 'string'],
        ];
    }

    static function tableName() {
        return '{{%userData}}';
    }

    public static function findById($id) {
        return static::findOne(['id_user' => $id]);
    }

    public static function findManager() {
        return static::find()->all();
    }
}