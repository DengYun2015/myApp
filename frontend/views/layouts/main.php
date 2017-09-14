<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 14:47
 */

use frontend\assets\frontendAsset;
use yii\helpers\Html;

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
        <div class="navbar-header aside bg-success nav-xs">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="icon-list"></i>
            </a>
            <a href="http://localhost/typecho/" class="navbar-brand text-lt">
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

        <div class="navbar-right ">
            <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                            <img src="http://secure.gravatar.com/avatar/" alt="Hello World"/>
                      </span>
                        个人中心 <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li>
                            <span class="arrow top"></span>
                            <a href="http://localhost/typecho/admin/login.php" target="_blank">登录</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/typecho/index.php/feed/" target="_blank">文章RSS</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/typecho/index.php/feed/comments/" target="_blank">评论RSS</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-black dk nav-xs aside hidden-print" id="nav">
                <section class="vbox">
                    <section class="w-f-md scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                             data-size="10px" data-railOpacity="0.2">
                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav bg clearfix">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        选择
                                    </li>


                                    <!--                     <li>
                                                          <a href="http://localhost/typecho/">
                                                            <i class="icon-drawer icon text-primary-lter"></i>
                                                            <b class="badge bg-primary pull-right">6</b>
                                                            <span class="font-bold">事件</span>
                                                          </a>
                                                        </li>
                                                         -->


                                    <li>

                                        <a href="http://localhost/typecho/index.php/about.html">
                                            <i class="icon-social-twitter icon  text-info-dker"></i>
                                            <span class="font-bold"> 关于</span>
                                        </a>


                                    </li>
                                    <li class="m-b hidden-nav-xs"></li>
                                </ul>
                                <ul class="nav" data-ride="collapse">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        控制
                                    </li>

                                    <li class="active">
                                    <li>
                                        <a href="#" class="auto">
                                            <span class="pull-right text-muted">
                                              <i class="fa fa-angle-left text"></i>
                                              <i class="fa fa-angle-down text-active"></i>
                                            </span>
                                            <i class="icon-grid icon"></i>
                                            <span>分类</span>
                                        </a>
                                        <ul class="nav dk text-sm">
                                            <li>
                                                <a href="http://localhost/typecho/index.php/category/default/"
                                                   class="auto">
                                                    <i class="fa fa-angle-right text-xs"></i>
                                                    <span>默认分类</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
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
                            <?php $this->beginBody() ?>
                            <?= $content ?>
                            <?php $this->endBody() ?>
                        </div>
                        </div>
                    </section>
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open"
                   data-target="#nav,html"></a>
            </section>
        </section>
    </section>
</section>
</body>
</html>
<?php $this->endPage() ?>

