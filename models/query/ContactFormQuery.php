<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 11.04.18
 * Time: 13:18
 */

namespace app\models\query;

use yii\db\ActiveRecord;

class ContactFormQuery extends ActiveRecord {
//
//    public $fullname;
//    public $email;
//    public $message;

    public function rules() {

        return [
            [['fullname', 'email', 'message'], 'required'],
        ];
    }

    public static function tableName() {
        return '{{%feedbackForm}}';
    }

    public function insertForm($data) {
        $this->attributes = $data['ContactForm'];
        return $this->save();
    }

}