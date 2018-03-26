<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 05.03.18
 * Time: 22:46
 */

namespace app\modules\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class ContactController extends BaseController {

    public function actionIndex() {
        return $this->render('contact');
    }

    public function actionEdit() {

    }
}