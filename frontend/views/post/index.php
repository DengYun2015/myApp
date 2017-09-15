<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 14:48
 * @var $list \frontend\services\Article[]
 * @var $pageNation yii\data\Pagination
 */

use yii\helpers\Url;
use yii\widgets\LinkPager;

?>

<div class="col-sm-9">
    <div class="blog-post">
        <!-- 开始循环  -->
        <?php
        if(empty($list)){
            echo '<div class="alert alert-warning" role="alert">没有找到相关内容！</div>';
        }else{
        foreach ($list as $content): ?>
        <div class="post-item">
            <div class="caption wrapper-lg">
                <h3 class="post-title">
                    <pjax-protty class="nav-primary"><a itemtype="url" href="<?= Url::to(['detail','id'=>$content->id]) ?>" class="title"><?= $content->title ?></a></pjax-protty>
                </h3>
                <div class="post-sum">
                    <pre ><?= $content->summary ?></pre>
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
                <div class="line"></div>
                <div class="text-muted">
                    <i class="fa fa-user icon-muted">by-</i> <a href="#" class="m-r-sm">admin</a>
                    <i class="fa fa-clock-o icon-muted"></i><?= $content->create_time ?><a href="#" class="m-l-sm"><i class="fa fa-comment-o icon-muted"></i>0</a>
                </div>
            </div>
        </div>
        <?php endforeach;
        echo LinkPager::widget(['pagination'=>$pageNation]);
        }
        ?>
    </div>
    <!-- 结束循环  -->
    <div class="text-center m-t-lg m-b-lg">
        <ul class="pagination pagination-md"></ul>
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
                    <a href="#"
                       class="font-semibold">Demo</a>: 欢迎加入 Demo 大家族<br>
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
                    <i class="fa fa-angle-right"></i><a href="#" class="font-semibold">测试</a><br>
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
                    <a href="#">默认分类</a>
                </div>
            </div>
        </div>
    </div>
</div>