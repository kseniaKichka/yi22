<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>

<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html class="no-js">

<head>
    <title>Admin Home Page</title>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>
<body>
<?= $this->render('@app/modules/admin/views/layouts/header') ?>
<div class="container-fluid">
    <div class="row-fluid">
        <?= $this->render('@app/modules/admin/views/layouts/left-sidebar') ?>
        <!--/span-->
        <div class="span9" id="content">
            <div class="row-fluid">
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <h4>Success</h4>
                    The operation completed successfully</div>
                <?= $this->render('@app/modules/admin/views/layouts/breadcrumbs') ?>
            </div>
            <?= $content ?>
        </div>
    </div>
    <hr>
    <footer>
        <p>&copy; Vincent Gabriel 2013</p>
    </footer>
</div>
<!--/.fluid-container-->
<?= $this->render('@app/modules/admin/views/layouts/footer') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>