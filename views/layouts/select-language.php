<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 12.04.18
 * Time: 10:16
 */

use yii\bootstrap\Html;

if(\Yii::$app->language == 'ru'):
    echo Html::a(\Yii::t('app', 'Go to English'), array_merge(
//        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'en']
    ));
else:
    echo Html::a(\Yii::t('app', 'Go to Russian'), array_merge(
//        \Yii::$app->request->get(),
        [\Yii::$app->controller->route, 'language' => 'ru']
    ));
endif;