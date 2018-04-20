<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 19.04.18
 * Time: 15:24
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Tag;
use app\modules\admin\models\TagTranslate;
use app\modules\admin\models\UserData;
use yii\helpers\ArrayHelper;

class TagController extends BaseController {

    public function actionIndex() {
        $model = new Tag();
        $tags = $model->getTags();
        return $this->render('index', ['model' => $tags]);
    }

    public function actionTag($alias) {

        $model = new Tag();
        $post = $model->getTag($alias);

        foreach ($post as $one) {
            $helper2 = ArrayHelper::index($one->tagTranslate, 'value');
            $one = ArrayHelper::merge($one, $helper2);
            $post = $one;
        }
        $post->nameAuthor = $post->getNameAuthor();

        return $this->render('one-tag', ['post' => $post]);
    }

    public function actionEdit($alias) {

        $tag = Tag::findByAlias($alias);
        $userData = UserData::findManager();

        $tagData = TagTranslate::findById($tag->id);
        if ($tag->load(\Yii::$app->request->post())  && $tagData->load(\Yii::$app->request->post())) {
            $tag->alias = $tag->setAlias($tagData->title);
            $tag->save();
            $tagData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-tag', ['model' => $tag, 'tagData' => $tagData, 'userData' => $userData]);

    }

    public function actionAdd() {

        $tag = new Tag();
        $tagData = new TagTranslate();
        $userData = UserData::findManager();
        if ($tag->load(\Yii::$app->request->post())  && $tagData->load(\Yii::$app->request->post())) {
            $tag->alias = $tag->setAlias($tagData->title);
            $tag->save();
            $tag->link('tagTranslate', $tagData);
            $tagData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-tag', ['model' => $tag, 'tagData' => $tagData, 'userData' => $userData]);

    }

    public function actionDelete($alias) {
        $model = new Tag();
        $posts = $model->getTags();
//        var_dump($tags); die;
        if ($tags = Tag::findByAlias($alias)) {
            $tags->active = Tag::STATUS_NOT_ACTIVE;
            $tags->save();
            \Yii::$app->session->setFlash('success', 'Ok');
            return $this->refresh('index');
        }
        return $this->render('index', ['model' => $posts]);
    }
}