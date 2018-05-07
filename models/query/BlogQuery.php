<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 07.05.18
 * Time: 14:56
 */

namespace app\models\query;


use app\modules\admin\models\Blog;
use yii\db\ActiveQuery;

class BlogQuery extends ActiveQuery {

    public function active() {
        return $this->andWhere('[[active]] = ' . Blog::STATUS_ACTIVE);
    }

    public function all($db = null) {
        return parent::all($db);
    }

    public function one($db = null) {
        return parent::one($db);
    }

}