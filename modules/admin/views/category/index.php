<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 16:15
 */
use \app\modules\admin\models\Blog;

$this->title = 'Blog';
?>


<?php foreach ($model as $one) { ?>
    <?php foreach ($one->categoryTranslate as $trans) { ?>
        <h3>
            <a href="<?php echo \yii\helpers\Url::to(['/admin/category/post/', 'alias' => $one->alias]) ?>">
                <?= $trans->title ?>
                <p><?php if ($one->active == Blog::STATUS_NOT_ACTIVE) { ?>
                    <?php echo "not active"; ?>
                    <?php } ?>
                </p>
            </a>
        </h3>
        <p>Summary: <?= $trans->summary ?></p>
        <p>Created Date: <?= Yii::$app->formatter->asDate($one->dateCreated, 'long') ?></p>
        <p>Updated Date: <?= Yii::$app->formatter->asDateTime($one->dateUpdated, 'long') ?></p>
        <p><a href='<?php echo \yii\helpers\Url::to(['/admin/category/edit', 'alias' => $one->alias]) ?>'>Edit</a></p>
        <p><a href='<?php echo \yii\helpers\Url::to(['/admin/category/delete', 'alias' => $one->alias]) ?>'>Delete</a></p>

    <?php } ?>
<?php } ?>
<p><a href='<?php echo \yii\helpers\Url::to(['/admin/category/add']) ?>'>Add</a></p>