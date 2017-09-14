<?php
/**
 * @author: dengyun
 * @time: 2017/9/13 18:37
 * @var $msg \frontend\collections\msg
 */

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-<?= $msg->getSuccess() ? 'success' : 'warning' ?>">
            <div class="box-header">
                <h3 class="box-title"><?= $msg->getSuccess() ? 'success' : 'failed' ?>!</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?= $msg->getMsg() ?>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <?php foreach ($msg->getButtons() as $btn): ?>
                    <a class="btn btn-default" href="<?= $btn['url'] ?>"><?= $btn['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div><!-- /.box -->
    </div>
</div>
