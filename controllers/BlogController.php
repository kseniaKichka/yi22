<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 13:58
 */

namespace app\controllers;


use app\modules\admin\models\Blog;
use app\modules\admin\models\Translate;
use yii\data\Pagination;
use yii\web\Controller;

class BlogController extends Controller {

    public $layout = 'blog/main';

    public function actionIndex() {

        $query = Blog::getActivePosts();
        $countQuery = clone $query;
        $pages = new Pagination([
            'totalCount' => $countQuery->count(),
            'pageSize' => 1,
        ]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('index', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionPost($alias) {

        $post = Blog::findByAlias($alias)
            ->with('translate')
            ->with('userData')
            ->active()
            ->one();

        return $this->render('single-post', [
            'post' => $post
        ]);
    }

    public function actionCategory() {
        return $this->render('category');
    }
}