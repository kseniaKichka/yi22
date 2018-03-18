<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 09.03.18
 * Time: 13:50
 */

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\Controller;
use app\modules\admin\models\AdminLogin;
use app\controllers\SiteController;

class LoginController extends SiteController{

    public function actionLogin() {

        $this->layout = 'base';
        
        if (Yii::$app->user->identity) {
            return $this->redirect(Url::to('/admin/home'));
        }


        $model = new AdminLogin();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(Url::to('/admin/home'));
        } else {
            return $this->render('login', ['model' => $model]);
        }

    }

    public function actionAdminLogout() {
        if (Yii::$app->user->identity) {
            Yii::$app->user->logout();
            return $this->redirect(Url::to('/'));
        } else {
            return $this->redirect(Url::to('/admin/login'));
        }
    }
}