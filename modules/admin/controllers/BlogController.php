<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:43
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Blog;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class BlogController extends BaseController {

//    public $this->layout =

    public function actionIndex() {
        $model = new Blog();

        $posts = $model->getPosts();

        foreach ($posts as $k => $post) {
            $helper2 = ArrayHelper::index($post->translate, 'value');
            $post = ArrayHelper::merge($post, $helper2);
            $posts[$k] = $post;

        }
//echo "<pre>"; print_r($posts); die;
        return $this->render('index', ['model' => $posts]);
    }

    public function actionPost($alias) {
        var_dump($alias); die;
    }
}