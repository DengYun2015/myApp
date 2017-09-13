<?php
/**
 * @author: dengyun
 * @time: 2017/3/10 11:29
 */

namespace app\assets;


class AdminLteAsset extends AdminLteBase
{
    public $css = [
        'dist/css/AdminLTE.css',
        'dist/css/skins/_all-skins.min.css',
        /*'dist/css/skins/skin-blue.min.css'*/
        /*'dist/css/skins/skin-red.min.css'*/
    ];

    public $js = [
        'dist/js/app.min.js',
    ];

    public $depends = [
        'app\assets\plugin\Font',
        'app\assets\plugin\BootStrap',
        'app\assets\plugin\Jquery',
    ];
}