<?php
/**
 * @author: dengyun
 * @time: 2017/9/13 14:28
 * @var \backend\services\Content[] $list
 * @var int $page
 * @var int $size
 * @ver $total int
 */

use yii\helpers\Url;

$page--;
$this->title = 'myApp';

?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>标题</th>
                        <th>概要信息</th>
                        <th style="width: 120px">发布时间</th>
                        <th style="width: 120px">更新时间</th>
                    </tr>
                    <?php
                    $i = $page*$size;
                    foreach ($list as $item):
                    $i++;
                        ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><a href="<?= Url::to(['content/detail','id'=>$item->id]) ?>"><?= $item->title ?></a></td>
                        <td><?= $item->summary ?></td>
                        <td><?= $item->create_time ?></td>
                        <td><?= $item->update_time ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <ul class="pagination pagination-sm no-margin pull-left">
                    <li><a href="#">«</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
