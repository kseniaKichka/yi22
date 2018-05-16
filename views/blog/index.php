<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 14:04
 */
use \yii\helpers\Url;
use app\widgets\resentPosts\RecentPosts;
?>

<div class="container show_button">
    <div class="row blog_posts_row">
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 bolg_posts_left">
            <?php foreach ($models as $model): ?>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_posts_post">
                <img src="blog/images/640x418.jpg" alt="">
                <?php foreach ($model->translate as $translate): ?>
                <h2><?= $translate->title ?></h2>
                <h3><?= $model->getDate(); ?></h3>
                <p> <?= $translate->summary ?></p>
                <?php endforeach; ?>
                <button onclick="window.location.href='<?= Url::to(["/blog/post", 'alias' => $model->alias]); ?>'"> Read More </button>
                <hr>
            </div>
            <?php endforeach; ?>
            <?php
                echo \yii\widgets\LinkPager::widget([
                    'pagination' => $pages,

                ]);
            ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 bolg_posts_right">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_posts_recent">
                <h2>Recent Blog</h2>
                <?= RecentPosts::widget(['message' => 'Good morning']) ?>
<!--                <section class="blog_recent_info">-->
<!--                    <a href="--><?//= Url::to(['/blog/post']); ?><!--">-->
<!--                        <img src="blog/images/640x418.jpg" alt="">-->
<!--                        <h3>Learn HTML Bascis</h3>-->
<!--                        <p>20 June 2017</p>-->
<!--                    </a>-->
<!--                </section>-->
<!--                <hr>-->
<!--                <section class="blog_recent_info">-->
<!--                    <a href="--><?//= Url::to(['/blog/post']); ?><!--">-->
<!--                        <img src="blog/images/640x418.jpg" alt="">-->
<!--                        <h3>Learn CSS Bascis</h3>-->
<!--                        <p>20 June 2017</p>-->
<!--                    </a>-->
<!--                </section>-->
<!--                <hr>-->
<!--                <section class="blog_recent_info">-->
<!--                    <a href="--><?//= Url::to(['/blog/post']); ?><!--">-->
<!--                        <img src="blog/images/640x418.jpg" alt="">-->
<!--                        <h3>Learn PHP Bascis</h3>-->
<!--                        <p>20 June 2017</p>-->
<!--                    </a>-->
<!--                </section>-->
<!--                <hr>-->
<!--                <section class="blog_recent_info">-->
<!--                    <a href="--><?//= Url::to(['/blog/post']); ?><!--">-->
<!--                        <img src="blog/images/640x418.jpg" alt="">-->
<!--                        <h3>Learn WordPress Bascis</h3>-->
<!--                        <p>20 June 2017</p>-->
<!--                    </a>-->
<!--                </section>-->
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_posts_category">
                <h2>Category</h2>
                <a href="<?= Url::to(['/blog/category']); ?>">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>IT Technology</p>
                </a>
                <hr>
                <a href="<?= Url::to(['/blog/category']); ?>">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Network Solutions</p>
                </a>
                <hr>
                <a href="<?= Url::to(['/blog/category']); ?>">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Desktop Help</p>
                </a>
                <hr>
                <a href="<?= Url::to(['/blog/category']); ?>">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Design Industry</p>
                </a>
                <hr>
                <a href="<?= Url::to(['/blog/category']); ?>">
                    <p><i class="fa fa-angle-right" aria-hidden="true"></i>Art and Paint Talent</p>
                </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_posts_tags">
                <h2>TAGS</h2>
                <a href="<?= Url::to(['/blog/tag']); ?>">
                    <p>Technology</p>
                </a>
                <a href="<?= Url::to(['/blog/tag']); ?>">
                    <p>Info Industry</p>
                </a>
                <a href="<?= Url::to(['/blog/tag']); ?>">
                    <p>Art</p>
                </a>
                <a href="<?= Url::to(['/blog/tag']); ?>">
                    <p>HTML</p>
                </a>
                <a href="<?= Url::to(['/blog/tag']); ?>">
                    <p>CSS</p>
                </a>
                <a href="<?= Url::to(['/blog/tag']); ?>">
                    <p>Front End Developing</p>
                </a>
            </div>
        </div>
    </div>
</div>
