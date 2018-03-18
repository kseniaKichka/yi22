<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title>Acura Multi purpose HTML5 Web Template</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper" class="home-page">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="pull-left hidden-xs"><i class="fa fa-clock-o"></i><span>Mon - Sat 8.00 - 18.00. Sunday CLOSED</span></p>
                    <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
                </div>
            </div>
        </div>
    </div>
    <!-- start header -->
    <?= $this->render('@app/views/layouts/header') ?>
    <!-- end header -->
    <?= $content ?>
    
    <!-- start footer -->
    <?= $this->render('@app/views/layouts/footer') ?>
    <!-- end footer -->
    
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
