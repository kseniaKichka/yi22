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
class AdminAsset extends AssetBundle
{
    public $sourcePath = '@app/modules/admin/web';
    public $css = [
        'bootstrap/css/bootstrap.min.css',
        'bootstrap/css/bootstrap-responsive.min.css',
        'vendors/easypiechart/jquery.easy-pie-chart.css',
        'assets/styles.css',

    ];
    public $js = [
        'vendors/jquery-1.9.1.min.js',
        'bootstrap/js/bootstrap.min.js',
        'vendors/easypiechart/jquery.easy-pie-chart.js',
        'assets/scripts.js',
    ];
    public $depends = [
    ];
}
