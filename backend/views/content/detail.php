<?php
/**
 * @author: dengyun
 * @time: 2017/9/12 19:58
 * @var $content \backend\services\Content
 */

use yii\helpers\Url;

?>
<div class="row">
    <!-- /.col -->
    <div class="col-md-12">
        <div class="box box-primary">
            <!--<div class="box-header with-border">
                <h3 class="box-title">Read Mail</h3>
                <div class="box-tools pull-right">
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body ">
                <div class="mailbox-read-info">
                    <h3><?= $content->title ?></h3>
                    <h5>发布于：<?= $content->create_time ?></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                    <?= $content->content ?>
                </div>
                <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <!-- /.box-footer -->
            <div class="box-footer">
                <?php
                $classes = ['label-danger', 'label-success', 'label-info', 'label-warning', 'label-primary'];
                $i = 0;
                $tags = $content->getTags();
                $classCount = count($classes);
                foreach ($tags as $id => $tag):
                    $class = $classes[$i % $classCount];
                    $i++;
                    ?>
                    <span class="label <?= $class ?>"><?= $tag ?></span>
                <?php endforeach; ?>
            </div>
            <div class="box-footer">
                <a type="button" class="btn btn-default" href="<?= Url::to(['content/edit','id'=>$content->id]) ?>"><i class="fa fa-pencil"></i> 修改</a>
                <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> 删除</button>
                <button type="button" class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i> 打印</button>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /. box -->
    </div>
    <!-- /.col -->
</div>