<?php
/**
 * Created by PhpStorm.
 * User: ksu
 * Date: 09.03.18
 * Time: 10:44
 */

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
<html>
<head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body id="login">
<div class="container">

    <?= $content ?>

</div> <!-- /container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
