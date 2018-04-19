<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 17.04.18
 * Time: 12:23
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use \app\modules\admin\models\Blog;

$this->title = "Edit Page About";

?>

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
                    <?= $form->field($blogData, 'title')->textInput(['class' => 'span6', ]) ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'active')->dropDownList([Blog::STATUS_ACTIVE => 'active',  Blog::STATUS_NOT_ACTIVE => 'not active']); ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'idAuthor')->dropDownList(\yii\helpers\ArrayHelper::map($userData,'id_user', 'soname')); ?>
                </div>
<!--                <div class="controls">-->
<!--                    --><?//= $form->field($model, 'id_tag')->dropDownList(\yii\helpers\ArrayHelper::map($blog,'id_tag', 'soname')); ?>
<!--                </div>-->
                <div class="controls">
                    <?= $form->field($model, 'id_category')->textarea(['rows' => '8', 'class' => 'span6']) ?>
                </div>
                <div class="controls">
                    <?= $form->field($blogData, 'summary')->textarea(['rows' => '8', 'class' => 'span6']) ?>
                </div>
                <div class="controls">
                    <?= $form->field($blogData, 'text')->textarea(['rows' => '8', 'class' => 'span6']) ?>
                </div>

                <?= Html::submitButton('Save', ['class' => 'btn btn-large btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
