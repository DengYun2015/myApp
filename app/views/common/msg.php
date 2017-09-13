<?php
/**
 * @author: dengyun
 * @time: 2017/9/13 18:37
 * @var bool $success
 * @var string $msg
 * @var array $buttons
 */

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid box-<?= $success ? 'success' : 'warning' ?>">
            <div class="box-header">
                <h3 class="box-title"><?= $success ? 'success' : 'failed' ?>!</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?= $msg ?>
            </div><!-- /.box-body -->
            <div class="box-footer">
                <?php foreach ($buttons as $btn): ?>
                    <a class="btn btn-default" href="<?= $btn['url'] ?>"><?= $btn['name'] ?></a>
                <?php endforeach; ?>
            </div>
        </div><!-- /.box -->
    </div>
</div>
