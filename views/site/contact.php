<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor.</p>
                <!-- Form itself -->
                <form name="sentMessage" id="contactForm"  novalidate>
                    <h3>Contact me</h3>
                    <div class="control-group">
                        <div class="controls">
                            <input type="text" class="form-control"
                                   placeholder="Full Name" id="name" required
                                   data-validation-required-message="Please enter your name" />
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <input type="email" class="form-control" placeholder="Email"
                                   id="email" required
                                   data-validation-required-message="Please enter your email" />
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
				            <textarea rows="10" cols="100" class="form-control"
                           placeholder="Message" id="message" required
                           data-validation-required-message="Please enter your message" minlength="5"
                           data-validation-minlength-message="Min 5 characters"
                           maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"> </div> <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
                </form>
            </div>
            <div class="col-md-6">
                <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?= $model->coordinats ?>)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
            </div>
        </div>
    </div>
</section>

<!--<div class="site-contact">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    --><?php //if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
<!---->
<!--        <div class="alert alert-success">-->
<!--            Thank you for contacting us. We will respond to you as soon as possible.-->
<!--        </div>-->
<!---->
<!--        <p>-->
<!--            Note that if you turn on the Yii debugger, you should be able-->
<!--            to view the mail message on the mail panel of the debugger.-->
<!--            --><?php //if (Yii::$app->mailer->useFileTransport): ?>
<!--                Because the application is in development mode, the email is not sent but saved as-->
<!--                a file under <code>--><?//= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?><!--</code>.-->
<!--                Please configure the <code>useFileTransport</code> property of the <code>mail</code>-->
<!--                application component to be false to enable email sending.-->
<!--            --><?php //endif; ?>
<!--        </p>-->
<!---->
<!--    --><?php //else: ?>
<!---->
<!--        <p>-->
<!--            If you have business inquiries or other questions, please fill out the following form to contact us.-->
<!--            Thank you.-->
<!--        </p>-->
<!---->
<!--        <div class="row">-->
<!--            <div class="col-lg-5">-->
<!---->
<!--                --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                    --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                    --><?//= $form->field($model, 'email') ?>
<!---->
<!--                    --><?//= $form->field($model, 'subject') ?>
<!---->
<!--                    --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                    --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                    ]) ?>
<!---->
<!--                    <div class="form-group">-->
<!--                        --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                    </div>-->
<!---->
<!--                --><?php //ActiveForm::end(); ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--    --><?php //endif; ?>
<!--</div>-->
