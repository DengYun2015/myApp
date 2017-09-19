<?php
/**
 * @author: dengyun
 * @time: 2017/9/14 17:16
 * @var $content \frontend\services\Article
 */
?>
<div class="col-sm-9">
    <div class="blog-post">
        <!-- 呈现  -->
        <div class="post-item">
            <div class="caption wrapper-lg">
                <h2 class="post-title"><a itemtype="url" href="#" class="title"><?= $content->title ?></a></h2>
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
