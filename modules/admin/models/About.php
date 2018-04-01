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
use yii\web\UploadedFile;

class About extends ActiveRecord {


    public function rules() {
        return [
            ['titlePage', 'required', 'message' => 'Please enter a title'],
            ['leftColumn', 'required', 'message' => 'Please enter a title'],
            ['centrColumn', 'required', 'message' => 'Please enter a title'],
            ['rightColumn', 'required', 'message' => 'Please enter a title'],
            ['bigText', 'required', 'message' => 'Please enter a title'],
//            ['image', 'file', 'skipOnEmpty' => false, 'extensions' => 'jpg'],
            ['descriptionPage', 'required', 'message' => 'Please enter a title'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'titlePage' => 'Title for page',
            'leftColumn' => 'Text for left colummn',
            'centrColumn' => 'Text for center colummn',
            'rightColumn' => 'Text for right column',
//            'image' => 'Image',
            'descriptionPage' => 'Description',
            'bigText' => 'Text near a picture',
        ];
    }

    public static function tableName()
    {
        return '{{%aboutPage}}';
    }
    
    public static function getInfo() {
        return self::find()->one();
    }

    public function getModel() {
        return $this::find()->one();
    }

//    public function upload()
//    {
//
//        if ($this->validate()) {
//                $this->image->saveAs('uploads/' . $this->image->baseName . '.' . $this->image->extension);
//            return true;
//        } else {
//            return false;
//        }
//    }
}