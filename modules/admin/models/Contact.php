<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 26.03.18
 * Time: 7:48
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class Contact extends ActiveRecord {

    public function rules() {

        return [
          ['titlePage', 'required', 'message' => 'Please enter a value'],
          ['smallTitlePage', 'required', 'message' => 'Please enter a value'],
          ['descriptionPage', 'required', 'message' => 'Please enter a value'],
          ['coordinats', 'required', 'message' => 'Please enter a value'],
        ];
    }

    public function attributeLabels() {

        return [
            'titlePage' => 'Title for page',
            'smallTitlePage' => 'Small Title for page',
            'descriptionPage' => 'Description for page',
            'coordinats' => 'Coordinats for page',
        ];
    }

    public static function tableName() {
        return '{{%contactPage}}';
    }

    public static function getInfo() {
        return self::find()->one();
    }

    public static function getCoord($arr) {
        return $arr[0] . ',' . $arr[1];
    }
}