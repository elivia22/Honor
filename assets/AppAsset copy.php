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
    public $basePath = '@webroot'; // C:/xampp/htdocs/honor/web
    public $baseUrl = '@web'; // /honor/web
    public $css = [
        'css/site.css',
        'dist/fonts/fonts/font-awesome.min.css',
        'dist/css/dashboard.css',
        'dist/plugins/charts-c3/c3-chart.css',
        'dist/plugins/morris/morris.css',
        'dist/plugins/scroll-bar/jquery.mCustomScrollbar.css',
        'dist/plugins/toggle-sidebar/sidemenu.css',
        'dist/plugins/iconfonts/plugin.css',  //web\dist\plugins\iconfonts\plugin.css
        'dist/images/loader.svg', 
        

    ];


//     jquery.min.js
// jquery-ui.js
// any third party plugins you loading
// your custom JS


    public $js = [
        'js/site.js',
        'dist/js/vendors/jquery-3.2.1.min.js',
        'dist/js/vendors/bootstrap.bundle.min.js', //dist/js/vendors/bootstrap.bundle.min.js.map:
        'dist/js/vendors/jquery.sparkline.min.js',
        'dist/js/vendors/selectize.min.js',
        'dist/js/vendors/jquery.tablesorter.min.js',
        'dist/js/vendors/circle-progress.min.js',
        'dist/js/custom.js',
        'dist/js/custom.js',

        'dist/plugins/rating/jquery.rating-stars.js',
        './dist/plugins/flot/jquery.flot.js',
        './dist/plugins/flot/jquery.flot.fillbetween.js',
        './dist/plugins/flot/jquery.flot.pie.js',

        /**
         * Echarts Js
         * */
        'dist/plugins/echarts/echarts.js',
        'dist/js/index1.js',

        /**
         * othercharts js
         */
        'dist/js/othercharts.js',
        'dist/plugins/chart/Chart.bundle.js',
        'dist/plugins/chart/utils.js',

        'dist/plugins/othercharts/jquery.knob.js',

        'dist/plugins/am-chart/amcharts.js',
        'dist/plugins/am-chart/serial.js',
        'dist/plugins/peitychart/jquery.peity.min.js',
        'dist/plugins/peitychart/peitychart.init.js',
        'dist/plugins/othercharts/jquery.knob.js',

        'dist/plugins/toggle-sidebar/sidemenu.js',
        'dist/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
