<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:42
 */

namespace backend\assets;


use backend\assets\AppAsset;
use yii\web\AssetBundle;

class TestAsset extends AssetBundle
{
    public $sourcePath = '@app/static';
/*    public $basePath = '@webroot';
    public $baseUrl = '@web';*/
    public $css = [
        //'css/bootstrap.css',
        //'css/site.css',
    ];
    public $js = [
        'test.js'
    ];

}