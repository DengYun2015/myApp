<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use backend\assets\AdminLteAsset;

AdminLteAsset::register($this);

?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="skin-blue sidebar-mini">
    <?php $this->beginBody() ?>
    <?= $content ?>
    <?php $this->endBody() ?>
    <script>
        $(function(){
            typeof JsInit ==='function' && JsInit();
        })
    </script>
    </body>
    </html>
<?php $this->endPage() ?>