<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About Us';
?>

<section id="inner-headline">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="pageTitle"><?= $model->titlePage ?></h2>
            </div>
        </div>
    </div>
</section>
<section id="content">
    <section class="section-padding">
        <div class="container">
            <div class="row showcase-section">
                <div class="col-md-6">
                    <img src="img/dev1.png" alt="showcase image">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <h3><?= $model->descriptionPage?></h3>
                        <p><?= $model->bigText ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="about">
            <div class="row">
                <div class="col-md-4">
                    <!-- Heading and para -->
                    <div class="block-heading-two">
                        <h3><span>Why Choose Us?</span></h3>
                    </div>
                    <p>
                        <?= $model->leftColumn?>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Our Solution</span></h3>
                    </div>
                    <p>
                        <?= $model->centrColumn?>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Our Expertise</span></h3>
                    </div>
                    <p>
                        <?= $model->rightColumn?>
                    </p>
                </div>
            </div>
            <br>
            <!-- Our Team starts -->
            <!-- Heading -->
            <div class="block-heading-six">
                <h4 class="bg-color">Our Team</h4>
            </div>
            <br>
            <!-- Our team starts -->
            <div class="team-six">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <!-- Team Member -->
                        <div class="team-member">
                            <!-- Image -->
                            <img class="img-responsive" src="img/team1.jpg" alt="">
                            <!-- Name -->
                            <h4>Johne Doe</h4>
                            <span class="deg">Creative</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Team Member -->
                        <div class="team-member">
                            <!-- Image -->
                            <img class="img-responsive" src="img/team2.jpg" alt="">
                            <!-- Name -->
                            <h4>Jennifer</h4>
                            <span class="deg">Programmer</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Team Member -->
                        <div class="team-member">
                            <!-- Image -->
                            <img class="img-responsive" src="img/team3.jpg" alt="">
                            <!-- Name -->
                            <h4>Christean</h4>
                            <span class="deg">CEO</span>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <!-- Team Member -->
                        <div class="team-member">
                            <!-- Image -->
                            <img class="img-responsive" src="img/team4.jpg" alt="">
                            <!-- Name -->
                            <h4>Kerinele rase</h4>
                            <span class="deg">Manager</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Our team ends -->
        </div>
    </div>
</section>

