<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:45
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;

class Blog extends ActiveRecord {

    const STATUS_ACTIVE = 1;

    public static function tableName() {
        return '{{%postBlog}}';
    }

    public function getPosts() {
        return self::find()
            ->select(array('{{translate}}.*', self::tableName().'.*'))
            ->leftJoin('{{%translate}}', '{{%translate}}.id_post = '.self::tableName().'.id')
            ->where([
                self::tableName().'.active' => self::STATUS_ACTIVE,
                '{{%translate}}.language' => 'en'
            ])
            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();
    }
}