<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 17.04.18
 * Time: 12:23
 */

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use \app\modules\admin\models\Category;

$this->title = "Edit Page About";
//echo "<pre>"; print_r($tag[0]->tagTranslate->title); die;
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
                    <?= $form->field($categoryData, 'title')->textInput(['class' => 'span6', ]) ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'active')->dropDownList([Category::STATUS_ACTIVE => 'active',  Category::STATUS_NOT_ACTIVE => 'not active']); ?>
                </div>
                <div class="controls">
                    <?= $form->field($model, 'idAuthor')->dropDownList(\yii\helpers\ArrayHelper::map($userData,'id_user', 'soname')); ?>
                </div>
                <div class="controls">
                    <?= $form->field($categoryData, 'summary')->textarea(['rows' => '8', 'class' => 'span6']) ?>
                </div>

                <?= Html::submitButton('Save', ['class' => 'btn btn-large btn-primary']) ?>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
