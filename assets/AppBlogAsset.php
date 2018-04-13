<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 13.04.18
 * Time: 13:44
 */

namespace app\assets;

use yii\web\AssetBundle;

class AppBlogAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'blog/css/blog_posts_style.css',
        'blog/css/style.css',
        'blog/css/bootstrap.min.css',
        'blog/css/font-awesome.min.css',
        'blog/css/magnific-popup.css',
    ];
    public $js = [
        'blog/js/jquery.js',
        'blog/js/anchor_point.js',
        'blog/js/dropdown_menu.js',
        'blog/js/buton.js',
        'blog/js/bootstrap.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}