<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 05.03.18
 * Time: 22:23
 */

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\web\Controller;
use app\modules\admin\models\AdminLogin;


class BaseController extends Controller {

    public $layout = 'main';

    


    function actionIndex() {
        return "Great! You are in BaseController";
    }


}