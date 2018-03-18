<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 05.03.18
 * Time: 22:45
 */

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class HomeController extends  BaseController {

//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'allow' => true,
//                        'roles' => ['@'],
//                    ],
//
//                ],
//                'denyCallback' => function () {
//                    return $this->goHome();
//                }
//            ],
//        ];
//    }

    public function actionIndex() {
//        var_dump(\Yii::$app->user); die;
        return $this->render('home');
    }
}