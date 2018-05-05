<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 01.04.18
 * Time: 14:44
 */

namespace app\modules\admin\models;

use yii\base\Model;

class UploadFile extends Model {

    public $image;

    public  function rules() {

        [['image'], 'file', 'extensions' => 'png, jpg'],
    }

    public function upload(){
        if($this->validate()){
            $this->image->saveAs("uploads/{$this->image->baseName}.{$this->image->extension}");
        }else{
            return false;
        }
    }
}