<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 10.03.18
 * Time: 8:05
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = "Edit Page Contact";

?>

<h1><?= $titleForm ?></h1>
<div class="row-fluid">
    <div class="block">
        <div class="navbar navbar-inner block-header">
            <div class="muted pull-left">Form Example</div>
        </div>
        <div class="block-content collapse in">
            <div class="span12">
                <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>
                <legend>Enter information into fields</legend>
                <div class="controls">
                    <?= $form->field($model, 'titlePage')->textInput(['class' => 'span6', ]) ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'descriptionPage')->textInput(['class' => 'span6']) ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'smallTitlePage')->textarea(['rows' => '8', 'class' => 'span6']) ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'coordinats')->textarea(['rows' => '8', 'class' => 'span6']) ?>
                </div>
                <?= Html::submitButton('Save', ['class' => 'btn btn-large btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
