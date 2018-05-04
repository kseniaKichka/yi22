<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 17.04.18
 * Time: 10:08
 */

$this->title = $post->name->translate;

?>

<h2><?= $post->name->translate ?></h2>
<p><?= $post->text->translate ?></p>
<p>Дата создания: <?= Yii::$app->formatter->asDate($post->dateCreated, 'long'); ?></p>
<p>Дата обновления: <?= Yii::$app->formatter->asDatetime($post->dateUpdated, 'long'); ?></p>
<?php //echo "<pre>"; print_r($post->userData->name); die; ?>
<p>Автор: <?= $post->nameAuthor ?></p>
