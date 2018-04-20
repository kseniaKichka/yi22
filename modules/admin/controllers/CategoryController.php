<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 20.04.18
 * Time: 12:56
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Category;
use app\modules\admin\models\CategoryTranslate;
use app\modules\admin\models\UserData;
use yii\helpers\ArrayHelper;

class CategoryController extends BaseController {

    public function actionIndex() {
        $model = new Category();
        $posts = $model->getCategories();
        return $this->render('index', ['model' => $posts]);
    }

    public function actionCategory($alias) {

        $model = new Category();
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

        $category = Category::findByAlias($alias);
        $userData = UserData::findManager();
        $categoryData = CategoryTranslate::findById($category->id);
        if ($category->load(\Yii::$app->request->post())  && $categoryData->load(\Yii::$app->request->post())) {
            $category->alias = $category->setAlias($categoryData->title);
            $category->save();
            $categoryData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-category', [
            'model' => $category,
            'categoryData' => $categoryData,
            'userData' => $userData,
        ]);

    }

    public function actionAdd() {

        $category = new Category();
        $categoryData = new CategoryTranslate();
        $userData = UserData::findManager();
        if ($category->load(\Yii::$app->request->post())  && $categoryData->load(\Yii::$app->request->post())) {
            $category->alias = $category->setAlias($categoryData->title);
            $category->alias = str_replace(' ', '_', strtolower($categoryData->title));
            $category->save();
            $category->link('categoryTranslate', $categoryData);
            $categoryData->save();
            \Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-category', ['model' => $category, 'categoryData' => $categoryData, 'userData' => $userData]);

    }

    public function actionDelete($alias) {
        $model = new Category();

        $posts = $model->getCategories();
        if ($category = Category::findByAlias($alias)) {
            $category->active = Category::STATUS_NOT_ACTIVE;
            $category->save();
            \Yii::$app->session->setFlash('success', 'Ok');
            return $this->refresh('index');
        }
        return $this->render('index', ['model' => $posts]);
    }
}