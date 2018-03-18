<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 09.03.18
 * Time: 10:22
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin(['options' => ['class' => 'form-signin']]); ?>
    <h2 class="form-signin-heading">Please sign in</h2>
    <?= $form->field($model, 'email')->textInput(['class' => 'input-block-level', 'placeholder' => 'Email address'])->label(false) ?>
    <?= $form->field($model, 'password')->textInput(['class' => 'input-block-level', 'placeholder' => 'Password'])->label(false) ?>
    <?= $form->field($model, 'rememberMe')->checkbox(['label' => 'Remember me', 'labelOptions' => ['class' => 'checkbox']]); ?>
    <?= Html::submitButton('Sign in', ['class' => 'btn btn-large btn-primary']) ?>
<?php ActiveForm::end(); ?>