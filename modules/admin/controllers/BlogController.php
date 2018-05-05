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
use app\modules\admin\models\CategoryTranslate;
use app\modules\admin\models\Tag;
use app\modules\admin\models\TagTranslate;
use app\modules\admin\models\Translate;
use app\modules\admin\models\UserData;
use yii\helpers\ArrayHelper;
use yii\web\Controller;

class BlogController extends BaseController {

//    public $this->layout =

    public function actionIndex() {
        $model = new Blog();
        $posts = $model->getPosts();
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
        $userData = UserData::findManager();
        $tagTranslate = TagTranslate::findManager();
        $categoryTranslate = CategoryTranslate::findManager();
        $blogData = Translate::findById($blog->id);
        if ($blog->load(\Yii::$app->request->post())  && $blogData->load(\Yii::$app->request->post())) {
            $blog->save();
            $blogData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-post', [
            'model' => $blog,
            'blogData' => $blogData,
            'userData' => $userData,
            'tagTranslate' => $tagTranslate,
            'categoryTranslate' => $categoryTranslate
        ]);

    }

    public function actionAdd() {

        $blog = new Blog();
        $blogData = new Translate();
        $userData = UserData::findManager();
        if ($blog->load(\Yii::$app->request->post())  && $blogData->load(\Yii::$app->request->post())) {
            $blog->alias = str_replace(' ', '_', strtolower($blogData->title));
            $blog->save();
            $blog->link('translate', $blogData);
            $blogData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-post', ['model' => $blog, 'blogData' => $blogData, 'userData' => $userData]);

    }

    public function actionDelete($alias) {
        $model = new Blog();

        $posts = $model->getPosts();
        if ($blog = Blog::findByAlias($alias)) {
            $blog->active = Blog::STATUS_NOT_ACTIVE;
            $blog->save();
            \Yii::$app->session->setFlash('success', 'Ok');
            return $this->refresh('index');
        }
        return $this->render('index', ['model' => $posts]);
    }
}