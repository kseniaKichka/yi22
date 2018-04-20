<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 16:15
 */
use \app\modules\admin\models\Tag;

$this->title = 'Tag';

?>


<?php foreach ($model as $one) { ?>
<!--    --><?php //foreach ($one->tagTranslate as $trans) { print_r($trans->summary); die; ?>
        <h3>
            <a href="<?php echo \yii\helpers\Url::to(['/admin/tag/post/', 'alias' => $one->alias]) ?>">
                <?= $one->tagTranslate->title ?>
                <p><?php if ($one->active == Tag::STATUS_NOT_ACTIVE) { ?>
                    <?php echo "not active"; ?>
                    <?php } ?>
                </p>
            </a>
        </h3>
        <p>Summary: <?= $one->tagTranslate->summary ?></p>
        <p>Created Date: <?= \Yii::$app->formatter->asDate($one->dateCreated, 'long') ?></p>
        <p>Updated Date: <?= \Yii::$app->formatter->asDateTime($one->dateUpdated, 'long') ?></p>
        <p><a href='<?php echo \yii\helpers\Url::to(['/admin/tag/edit', 'alias' => $one->alias]) ?>'>Edit</a></p>
        <p><a href='<?php echo \yii\helpers\Url::to(['/admin/tag/delete', 'alias' => $one->alias]) ?>'>Delete</a></p>

<!--    --><?php //} ?>
<?php } ?>
<p><a href='<?php echo \yii\helpers\Url::to(['/admin/tag/add']) ?>'>Add</a></p>