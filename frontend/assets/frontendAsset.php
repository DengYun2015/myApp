<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 14:19
 */
namespace frontend\assets;

use yii\web\AssetBundle;


class frontendAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/animate.css',
        'static/css/font-awesome.min.css',
        'static/css/simple-line-icons.css',
        'static/css/font.css',
        'static/css/app.css',
    ];
    public $js = [
        'static/js/charts/easypiechart/jquery.easy-pie-chart.js',
        'static/js/charts/sparkline/jquery.sparkline.min.js',
        'static/js/app.js',
        'static/js/slimscroll/jquery.slimscroll.min.js',
        'static/js/app.plugin.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}