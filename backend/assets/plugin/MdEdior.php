<?php
/**
 * @author: dengyun
 * @time: 2017/8/29 16:42
 */

namespace backend\assets\plugin;


use yii\web\AssetBundle;

class MdEdior extends AssetBundle
{

    public $sourcePath = '@bower/editor.md';

    public $js = [
        'editormd.min.js',
    ];

    public $css = [
        'css/editormd.css',
        'css/editormd.logo.css',
        'css/editormd.preview.css',
    ];

    public $depends = [
        'backend\assets\plugin\Jquery'
    ];
}