<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 10.03.18
 * Time: 8:05
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

print_r($model);

?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i>Saved!</h4>
        <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>
<h1>Edit</h1>
<div class="row-fluid">
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Form Example</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>
                    <legend>Form Components</legend>
                    <div class="controls">
                        <?= $form->field($model, 'titlePage')->textInput(['class' => 'span6', ])->label('Title') ?>
                    </div>
                    <div class="controls">
                        <?= $form->field($model, 'descriptionPage')->textInput(['class' => 'span6'])->label('Description') ?>
                    </div>
<!--<div class="controls">-->
<!--</div>-->
<!--<div class="controls">-->
<!--</div>-->
<!--<div class="controls">-->
<!--</div>-->
<!--<div class="controls">-->
<!--</div>-->
<!--<div class="controls">-->
<!--</div>-->
                    <?= Html::submitButton('Sign in', ['class' => 'btn btn-large btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
