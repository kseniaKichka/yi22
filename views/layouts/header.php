<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>

<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
            </div>
            <div class="navbar-collapse collapse ">
                <?php
                NavBar::begin();
                echo Nav::widget([
                    'options' => ['class' => 'nav navbar-nav'],
                    'items' => [
                        ['label' => \Yii::t('app', 'Home'), 'url' => ['site/index']],
                        ['label' => \Yii::t('app', 'About'), 'url' => ['site/about']],
                        ['label' => \Yii::t('app', 'Contact'), 'url' => ['site/contact']],

                    ],
                ]);
                NavBar::end();
                ?>
            </div>
        </div>
    </div>
</header>