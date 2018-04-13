<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 13:58
 */

namespace app\controllers;


use yii\web\Controller;

class BlogController extends Controller {

    public $layout = 'blog/main';

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPost() {
        return $this->render('single-post');
    }
}