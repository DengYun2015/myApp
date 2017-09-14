<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 17:16
 * @var $content \frontend\services\Content
 */
?>
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
<div class="col-sm-9">
    <div class="blog-post">
        <!-- 呈现  -->
        <div class="post-item">
            <!-- <div class="post-media">
          <img src="http://localhost/typecho/usr/themes/cnmb/images/m42.jpg" class="img-full">
            </div> -->
            <div class="caption wrapper-lg">
                <h2 class="post-title">
                    <a itemtype="url" href="http://localhost/typecho/index.php/archives/4/"
                       class="title"><?= $content->title ?></a></h2>
                <div class="text-muted">
                    <i class="fa fa-user icon-muted">by-</i>
                    <a href="#" class="m-r-sm">admin</a>
                    <i class="fa fa-clock-o icon-muted"></i>
                    <?= $content->create_time ?>
                    <a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i>0</a>
                </div>
                <div class="line line-lg"></div>
                <div class="post-sum">
                    <?= $content->content ?>
                    <p>
                        <?php
                        $classes = ['label-default','label-danger', 'label-success', 'label-info', 'label-warning', 'label-primary'];
                        $i = 0;
                        $tags = $content->getTags();
                        $classCount = count($classes);
                        foreach ($tags as $id => $tag):
                            $class = $classes[$i % $classCount];
                            $i++;
                            ?>
                            <span class="label <?= $class ?>"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </p>
                </div>
            </div>
        </div>
        <!--  呈现  -->
    </div>
</div>
<div class="col-sm-3">
    <!--  最近评论 -->
    <div class="panel panel-default">
        <div class="panel-heading">最近评论</div>
        <div class="panel-body">
            <article class="media">
                <div class="media-body">
                    <i class="fa fa-angle-right"></i>
                    <a href="<?= \yii\helpers\Url::to(['post']) ?>" class="font-semibold">Demo</a>: 欢迎使用<br>
                </div>
            </article>
        </div>
    </div>
    <!--  最新文章 -->
    <div class="panel panel-default">
        <div class="panel-heading">最新文章</div>
        <div class="panel-body">
            <article class="media">
                <div class="media-body">
                    <i class="fa fa-angle-right"></i><a href="<?= \yii\helpers\Url::to(['post']) ?>" class="font-semibold">测试</a><br>
                </div>
            </article>
        </div>
    </div>
    <!-- ./ 最新文章 -->
    <!--  文章分类 -->

    <div class="panel panel-default">
        <div class="panel-heading">全部分类</div>
        <div class="panel-body">
            <div class="nav-primary">
                <div class="list-group-item"><span class="badge pull-right">3 </span>
                    <a href="<?= \yii\helpers\Url::to(['post']) ?>">默认分类</a>
                </div>
            </div>
        </div>
    </div>
</div>
