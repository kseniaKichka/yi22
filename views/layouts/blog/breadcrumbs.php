<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 13:37
 */
use \yii\helpers\Url;
?>

<!--   Blog Posts Contianer   -->
<div class="container-fluid single-bg">
    <h2>
        Blog Posts
    </h2>
    <a href="<?= Url::to(['/site/index']); ?>">Home /</a>
    <a href="<?= Url::to(['/blog/index']); ?>">Blog Posts</a>
</div>
