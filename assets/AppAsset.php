<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/fancybox/jquery.fancybox.css',
        'css/flexslider.css',
        'css/style.css',
    ];
    public $js = [
        'js/jquery.js',
        'js/jquery.easing.1.3.js',
        'js/bootstrap.min.js',
        'js/jquery.fancybox.pack.js',
        'js/jquery.fancybox-media.js',
        'js/jquery.flexslider.js',
        'js/animate.js',
        'js/modernizr.custom.js',
        'js/jquery.isotope.min.js',
        'js/jquery.magnific-popup.min.js',
        'js/animate.js',
        'js/custom.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
