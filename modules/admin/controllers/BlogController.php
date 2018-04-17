<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 15:43
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Blog;
use app\modules\admin\models\BlogForm;
use app\modules\admin\models\Translate;
use app\modules\admin\models\UserData;
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

        return $this->render('index', ['model' => $posts]);
    }

    public function actionPost($alias) {

        $model = new Blog();
        $post = $model->getPost($alias);

        foreach ($post as $one) {
            $helper2 = ArrayHelper::index($one->translate, 'value');
            $one = ArrayHelper::merge($one, $helper2);
            $post = $one;
        }
        $post->nameAuthor = $post->getNameAuthor();

        return $this->render('one-post', ['post' => $post]);
    }

    public function actionEdit($alias) {

        $blog = Blog::findByAlias($alias);
//        $userData = UserData::findById($blog->idAuthor);
        $userData = UserData::findManager();

        $blogData = Translate::findById(1);

        if ($blog->load(\Yii::$app->request->post()) ) {
            // && $userData->load(\Yii::$app->request->post())
            $blog->save();
//            $blogData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-post', ['model' => $blog, 'blogData' => $blogData, 'userData' => $userData]);

    }

    public function actionAdd() {

        $blog = new Blog();
        $userData = new UserData();

        if ($blog->load(\Yii::$app->request->post()) && $blog->save()) {

            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-post', ['model' => $blog]);

    }
}