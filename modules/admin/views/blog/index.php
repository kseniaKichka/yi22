<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 16:15
 */

$this->title = 'Blog';
?>


<?php foreach ($model as $one) { ?>
    <h3>
        <a href="<?php echo \yii\helpers\Url::to(['/admin/blog/post/', 'alias' => $one->alias]) ?>">
            <?= $one->name->translate ?>
        </a>
    </h3>
    <p>Summary <?= $one->summary->translate ?></p>
    <p><a href='<?php echo \yii\helpers\Url::to(['/admin/blog/edit', 'alias' => $one->alias]) ?>'>Edit</a></p>

<?php } ?>
<p><a href='<?php echo \yii\helpers\Url::to(['/admin/blog/add']) ?>'>Add</a></p>