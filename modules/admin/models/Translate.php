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

    public static function tableName() {
        return '{{%translate}}';
    }
}