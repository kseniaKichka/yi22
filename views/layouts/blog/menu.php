<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 13:36
 */
use \yii\helpers\Url;
?>

<!--   NAV  -->
<div class="row nav_row" id="navigation_section">
    <div class="container-fluid navigation_section" >
        <div class="container navigation">
            <nav class="navbar">
                <div class="navbar-header">
                    <img src="blog/images/logo.gif" alt="logo">
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?= Url::to(['/site/index']); ?>">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li class="hidden-menu"><a href="<?= Url::to(['/site/index']); ?>">About</a></li>
                            <li class="hidden-menu"><a href="<?= Url::to(['/site/about']); ?>">Single About </a></li>
                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['/site/services']); ?>">Services</a></li>
                    <li><a href="<?= Url::to(['/site/team']); ?>">Team</a></li>
                    <li><a href="<?= Url::to(['/site/work']); ?>">Work</a></li>
                    <li><a href="<?= Url::to(['/site/pricing']); ?>">Pricing</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li class="hidden-menu"><a href="<?= Url::to(['/site/index']); ?>">Home </a></li>
                            <li class="hidden-menu"><a href="<?= Url::to(['/blog']); ?>">Blog Posts</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= Url::to(['/site/contact']); ?>">Contact</a></li>
                </ul>
            </nav>
            <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12 mobile_menu"><img src="blog/images/menu_button.png" alt=""></div>
            <div class = "dropdown_mobile">
                <a class = "closed" href = "<?= Url::to(['/site/index']); ?>">
                    <section onclick="">
                        Home
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/site/about']); ?>">
                    <section onclick="">
                        About
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/site/services']); ?>">
                    <section onclick="">
                        Services
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/site/team']); ?>">
                    <section onclick="">
                        Team
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/site/work']); ?>">
                    <section onclick="">
                        Work
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/site/pricing']); ?>">
                    <section onclick="">
                        Pricing
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/blog']); ?>">
                    <section onclick="">
                        Blog
                    </section>
                </a>
                <a class = "closed" href = "<?= Url::to(['/site/contact']); ?>">
                    <section onclick="">
                        Contact
                    </section>
                </a>
            </div>
        </div>
    </div>
</div>
<a href="#navigation_section"><img src = "blog/images/buton.png" id="button" alt=""></a>
