<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:45
 */

namespace app\modules\admin\models;


use yii\db\ActiveRecord;
use app\modules\admin\models\Translate;

class Blog extends ActiveRecord {

    const STATUS_ACTIVE = 1;
    public $text;
    public $summary;
    public $name;

    public static function tableName() {
        return '{{%postBlog}}';
    }

    public function getPosts() {
        return self::find()
//            ->select(array( self::tableName().'.*'))
//            ->leftJoin('{{%translate}}', '{{%translate}}.id_post = '.self::tableName().'.id')
            ->joinWith('translate')
//            ->with('translate')
            ->where([
                self::tableName().'.active' => self::STATUS_ACTIVE,
                Translate::tableName().'.language' => 'en'
            ])

            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();
    }

    public function getTranslate() {
        return $this->hasMany(Translate::className(), ['id_post' => 'id']);
    }
}
//Translate::tableName().'.*',