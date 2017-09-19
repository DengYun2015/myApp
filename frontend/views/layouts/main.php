<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 14:47
 */

use frontend\assets\frontendAsset;
use yii\helpers\Html;
use frontend\services\Options;
use yii\helpers\Url;

frontendAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="app">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="theme-color" content="#4cb6cb">
    <meta name="msapplication-TileColor" content="#4cb6cb">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <?= Html::csrfMetaTags() ?>
    <title>Hello <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<section class="vbox">
    <header class="bg-white-only lter header header-md navbar navbar-fixed-top-xs">
        <div class="navbar-header aside bg-success">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="icon-list"></i>
            </a>
            <a href="/" class="navbar-brand text-lt">
                <i class=" icon-bubble"></i>
                <img src="#" alt="." class="hide">
                <span class="hidden-nav-xs m-l-sm">Hello World</span
            </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                <i class="icon-settings"></i>
            </a>
        </div>
        <ul class="nav navbar-nav hidden-xs">
            <li>
                <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
                    <i class="fa fa-indent text"></i>
                    <i class="fa fa-dedent text-active"></i>
                </a>
            </li>
        </ul>
        <form action="?i=search" method="post" class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs"
              role="search" target="_blank">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-btn">
                        <!--<form id="search" method="post" action="./" role="search">-->
                            <button type="submit" name="search" value="搜索" class="btn btn-sm bg-white btn-icon rounded">
                                <i class="fa fa-search"></i>
                            </button>
                    </span>
                    <input type="text" name="s" class="form-control input-sm no-border rounded"
                           placeholder="搜索视频,文章,音乐...">
                </div>
            </div>
        </form>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-black dk aside hidden-print" id="nav">
                <section class="vbox">
                    <section class="w-f-md scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                             data-size="10px" data-railOpacity="0.2">
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
<!--                                <ul class="nav bg clearfix">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        选择
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-social-twitter icon  text-info-dker"></i>
                                            <span class="font-bold"> 关于</span>
                                        </a>
                                    </li>
                                    <li class="m-b hidden-nav-xs"></li>
                                </ul>-->
                                <ul class="nav" data-ride="collapse">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        分类目录
                                    </li>
                                    <li class="active">
<!--                                        <a href="#" class="auto">-->
<!--                                            <span class="pull-right text-muted">-->
<!--                                              <i class="fa fa-angle-left text"></i>-->
<!--                                              <i class="fa fa-angle-down text-active"></i>-->
<!--                                            </span>-->
<!--                                            <i class="icon-grid icon"></i>-->
<!--                                            <span>分类</span>-->
<!--                                        </a>-->
<!--                                        <ul class="nav dk text-sm">-->
                                            <?php
                                            function createMenu($menuNodes)
                                            {
                                                foreach ($menuNodes as $node){
                                                    echo '<li>';
                                                    echo '<a href="'. Url::to(['post/index','category'=>$node['id']]).'" class="auto">';
                                                    echo '<i class="fa fa-angle-right text-xs"></i>';
                                                    echo '<span>'.$node['name'].'</span>';
                                                    echo '</a>';
                                                    if(isset($node['childNode'])){
                                                        echo '<ul class="nav dk text-sm">';
                                                        createMenu($node['childNode']);
                                                        echo '</ul>';
                                                    }
                                                    echo '</li>';
                                                }
                                            }
                                            createMenu(Options::getCategoryNodes());
                                            ?>
                                        <!--</ul>-->
                                    </li>
                                </ul>
                                <div style="position:fixed; bottom:0; "></div>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable wrapper-lg">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- .breadcrumb -->
                                <ul class="breadcrumb">
                                    <li><a href="<?= \yii\helpers\Url::to(['post/index']) ?>"><i class="fa fa-home"></i> 首页</a></li>
                                    <!--<li class="active">
                                        <a href="#">
                                            <i class="fa fa-list-ul"></i>
                                            <a href="">默认分类</a>
                                        </a>
                                    </li>-->
                                </ul>
                                <!-- / .breadcrumb -->
                            </div>
                            <?php $this->beginBody() ?>
                            <?= $content ?>
                            <?php $this->endBody() ?>
                            <div class="col-sm-3">
                                <!--  最新文章 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">最新文章</div>
                                    <div class="panel-body">
                                        <article class="media">
                                            <div class="media-body">
                                                <?php
                                                $recentArtices = \frontend\services\Article::getRecent();
                                                foreach ($recentArtices as $artice){
                                                ?>
                                                <i class="fa fa-angle-right"></i>
                                                    <a href="<?= Url::to(['post/detail','id'=>$artice->id]) ?>" class="font-semibold"><?= $artice->title ?></a>
                                                    <br>
                                                <?php } ?>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                                <!-- ./ 最新文章 -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">友情链接</div>
                                    <div class="panel-body">
                                        <a style="margin-bottom: 5px;" href="http://qqdie.com/" class="btn btn-s-md btn-default" target="_blank">QQ爹博客</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
            </section>
        </section>
    </section>
</section>
</body>
</html>
<?php $this->endPage() ?>

