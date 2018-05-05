<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 23.04.18
 * Time: 11:25
 */

namespace app\modules\admin\controllers;


use app\modules\admin\models\Blog;
use app\modules\admin\models\BlogSearch;
use yii\data\ActiveDataProvider;

class BlogGridController extends BaseController {

    public function actionIndex() {

        $searchModel = new BlogSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}