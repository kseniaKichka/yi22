<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:45
 */

namespace app\modules\admin\models;

use Yii;
use app\models\query\BlogQuery;
use yii\data\ActiveDataProvider;
use yii\db\ActiveRecord;
use app\modules\admin\models\Translate;
use yii\helpers\ArrayHelper;

class Blog extends ActiveRecord {

    const STATUS_ACTIVE = 1;
    const STATUS_NOT_ACTIVE = 0;
    public $nameAuthor;

    public static function tableName() {
        return '{{%postBlog}}';
    }

    public static function find() {
        return new BlogQuery(get_called_class());
    }

    public function rules() {
        return [
            [['idAuthor', 'id_category', 'id_tag'], 'required'],
            [['active'], 'required'],
            [['idAuthor', 'id_category', 'id_tag'], 'integer'],
            ['active', 'integer'],
        ];
    }

    public function getPosts() {
        return self::find()
            ->joinWith('translate')
            ->where([
                Translate::tableName().'.language' => 'en'
            ])

            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();
    }

    public static function getActivePosts() {
        return self::find()
            ->joinWith('translate')
            ->where([
                Translate::tableName().'.language' => 'en',
                self::tableName().'.active' => self::STATUS_ACTIVE
            ]);

    }

    public function search($params) {
        $query =  self::find()
            ->joinWith('translate')
            ->where([
                Translate::tableName().'.language' => 'en'
            ])

            ->orderBy(self::tableName().'.dateCreated ASC')
            ->all();

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'created_at' => SORT_DESC,
                    'title' => SORT_ASC,
                ]
            ],
        ]);
    }

    public function getPost($alias) {
        return self::find()
            ->joinWith('translate')
            ->joinWith('userData')
            ->where([
                self::tableName().'.active' => self::STATUS_ACTIVE,
                Translate::tableName().'.language' => 'en',
                self::tableName().'.alias' => $alias,
            ])
            ->all();

    }

    public static function findByAlias($alias) {
        return static::find(['alias' => $alias]);
    }

    public function getTranslate() {
        return $this->hasMany(Translate::className(), ['id_post' => 'id']);
    }

    public function getUserData() {
        return $this->hasOne(UserData::className(), ['id_user' => 'idAuthor']);
    }

    public function getNameAuthor() {
        return ArrayHelper::getValue($this, 'userData.name'). ' ' .ArrayHelper::getValue($this, 'userData.soname');
    }

    public function getDate() {
        return Yii::$app->formatter->asDate($this->dateCreated, 'long');
    }

    public function getFullName() {
        return $this->userData->name . ' ' . $this->userData->soname;
    }
}