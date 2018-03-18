<?php

/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 06.03.18
 * Time: 19:30
 */

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;

class About extends ActiveRecord {

    public $titlePage;
    public $descriptionPage;

    public function rules() {
        return [
            ['titlePage', 'required', 'message' => 'Please enter a title'],
        ];
    }

    public static function tableName()
    {
        return '{{aboutPage}}';
    }
    
    public static function getInfo() {
        return self::find()->one();
    }
}