<?php
/**
 * @author: dengyun
 * @time: 2017/8/29 16:42
 * @var $category \common\models\Options[]
 * @var $content \app\services\Content
 */

use app\assets\plugin\CkEditor;
use yii\helpers\Url;

CkEditor::register($this);

?>
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">内容发布</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?= Url::to(['content/edit']) ?>">
                <div class="box-body">
                    <div class="form-group">
                        <label for="title" class="col-md-1 control-label">标题：</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" value="<?= $content->title ?>" id="title">
                            <input type="hidden" name="_csrf" value="<?= Yii::$app->request->getCsrfToken() ?>">
                            <input type="hidden" name="id" value="<?= $content->id ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1 control-label">类别：</label>
                        <div class="col-md-3">
                            <select name="type" class="form-control">
                                <?php foreach ($category as $options): ?>
                                    <option value="<?= $options->id ?>" <?= $options->id==$content->type ? 'selected="selected"':'' ?>>
                                        <?= $options->name ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1 control-label">标签：</label>
                        <div class="col-md-10">
                            <input type="text" name="tags" class="form-control" id="tags" value="<?= implode(',',$content->getTags()) ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1 control-label">内容：</label>
                    </div>
                    <div class="form-group">
                        <textarea id="content" name="content" style="display: none;">
                            <?= $content->content ?>
                        </textarea>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">发布</button>
                    <button type="submit" class="btn btn-primary">存草稿</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
</div>
<script>
    function JsInit() {
        CKEDITOR.replace('content', {height: 600});
    }
</script>