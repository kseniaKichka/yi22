<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\web\View;

$this->title = $model->titlePage;
$this->params['breadcrumbs'][] = $this->title;
?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle"><?= Html::encode($this->title) ?></h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('messageSent')): ?>
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <h4><i class="icon fa fa-check"></i>Saved!</h4>
                <?php  echo Yii::$app->session->getFlash('messageSent'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="about-logo">
                    <h3><?= $model->smallTitlePage ?></h3>
                    <p><?= $model->descriptionPage ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><?= \Yii::t('app', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor'); ?>.</p>
                <!-- Form itself -->
                <?php $form = ActiveForm::begin(); ?>
                    <div class="control-group">
                        <div class="controls">
                            <?= $form->field($contactForm, 'fullname') ?>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <?= $form->field($contactForm, 'email') ?>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <?= $form->field($contactForm, 'message')->textarea(['rows' => 10, 'cols' => 100]) ?>
                        </div>
                    </div>
                <?= Html::submitButton(\Yii::t('app', 'Send'), ['class' => 'btn btn-primary pull-right']) ?>
                <?php ActiveForm::end() ?>
            </div>
            <div class="col-md-6">
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?= $model->coordinats ?>)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
        </div>
    </div>
</section>

