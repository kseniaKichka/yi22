<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 17.04.18
 * Time: 10:08
 */

//$this->title = $model->name->translate;

?>

<h2><?= $model->name->translate ?></h2>
<p><?= $model->text->translate ?></p>
<p>Дата создания: <?= Yii::$app->formatter->asDate($model->dateCreated, 'long'); ?></p>
<p>Дата обновления: <?= Yii::$app->formatter->asDatetime($model->dateUpdated, 'long'); ?></p>
<?php //echo "<pre>"; print_r($post->userData->name); die; ?>
<p>Автор: <?= $model->nameAuthor ?></p>
