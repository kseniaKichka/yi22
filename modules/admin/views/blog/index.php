<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 16:15
 */


?>


<?php foreach ($model as $one) { ?>
    <h3><a href="<?php echo \yii\helpers\Url::to(['/admin/blog/post/', 'alias' => $one->alias]) ?>"><?= $one->name->translate ?>1</a></h3>
<!--    --><?php //echo "<pre>"; print_r($one); die; ?>
    <p>Summary <?= $one->summary->translate ?></p>
    <p>Text <?= $one->text->translate ?></p>

<?php } ?>
