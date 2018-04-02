<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 05.03.18
 * Time: 22:46
 */

namespace app\modules\admin\controllers;

use app\modules\admin\models\Contact;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class ContactController extends BaseController {

    public function actionIndex() {

        $model = Contact::getInfo();

        if (is_null($model)) {
            return $this->render('add-contact');
        }
        return $this->render('contact', ['model' => $model]);
    }

    public function actionEdit() {
        $model = Contact::getInfo();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-contact',  ['model' => $model, 'titleForm' => "Edit Form for Contact Page"]);
    }

    public function actionAdd() {

        $model = new Contact();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', 'Ok');
        }
        return $this->render('edit-contact', ['model' => $model, 'titleForm' => 'Add Info at Contact Page']);
    }
}