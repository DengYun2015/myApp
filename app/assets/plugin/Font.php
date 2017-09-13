<?php
/**
 * @author: dengyun
 * @time: 2017/3/10 11:43
 */

namespace app\assets\plugin;


use yii\web\AssetBundle;

class Font extends AssetBundle
{
    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'
    ];
}