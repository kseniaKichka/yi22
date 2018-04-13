<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:43
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Blog;
use yii\web\Controller;

class BlogController extends Controller {


    public function actionIndex() {
        $model = new Blog();
        var_dump($model->getPosts());

    }
}