<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppBlogAsset;

AppBlogAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700|Raleway:400,500,300" rel="stylesheet">
    <title>Soyuz - Blog Posts</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!--   NAV  -->
<?= $this->render('@app/views/layouts/blog/menu') ?>
<!--   Blog Posts Contianer   -->
<?= $this->render('@app/views/layouts/blog/breadcrumbs') ?>

<?= $content ?>

<!-- Footer -->
<?= $this->render('@app/views/layouts/blog/footer') ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>