<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 18:53
 */

namespace frontend\controllers;


use frontend\services\Options;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $nodes = Options::getCategoryNodes();
        function createMenu($menuNodes)
        {
            foreach ($menuNodes as $node){
                //echo $node['id'].$node['name'];
                if(!isset($node['id'])){
                    echo '<<<<<<<<<<<<<<<<';
                    print_r($menuNodes);
                    echo '>>>>>>>>>>>>>>>>'.PHP_EOL.PHP_EOL;
                    continue;
                    //exit;
                }
                echo PHP_EOL;
                if(isset($node['childNode'])){
                    createMenu($node['childNode']);
                }else{
                    //echo '===================';
                    print_r($node);
                }
                continue;

            }
        }
        print_r($nodes);
        createMenu($nodes);
    }
}