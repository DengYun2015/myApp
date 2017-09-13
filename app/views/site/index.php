<?php
/**
 * @author: dengyun
 * @time: 2017/3/9 11:38
 */

\app\assets\pages\LoginAsset::register($this);
$this->title = 'Welcom';
?>
<style>
    .btn-wechat{
        color: #44B549;
    }
    #qrcode{
        top: -267px;
        background: white;
        z-index: 999;
        display: none;
    }
</style>
<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>WELCOME</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <!--<p class="login-box-msg">Sign in to start your session</p>-->
        <form action="#" method="post">
            <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
            <div class="form-group has-feedback">
                <input type="text" name="LoginForm[username]" class="form-control" placeholder="UserName">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="LoginForm[password]" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if(!empty($error)): ?>
                <span class="help-block bg-danger"><?= $error ?></span>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input name="LoginForm[rememberMe]" value="1" type="checkbox"> 记住登录状态
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-block btn-flat">登录</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="row"></div>
        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="javascript:$('#qrcode').show()" class="btn btn-block btn-social btn-wechat btn-flat"><i class="fa fa-wechat"></i>使用微信登录</a>
        </div>
    </div>
    <div class="box box-default" id="qrcode">
        <div class="box-header with-border">
            <h3 class="box-title">Login with Wechat</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <img id="qrimg" style="width: 100%;" src="http://qr.api.cli.im/qr?data=http%253A%252F%252Fwww.qq.com&level=H&transparent=false&bgcolor=%23ffffff&forecolor=%23000000&blockpixel=12&marginblock=1&logourl=&size=280&kid=cliim&key=336de2904c8392a173863ccd780a2579">
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
<script>
    function JsInit() {
        $('body').addClass('hold-transition login-page');
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        $('#qrcode .btn').click(function(){
            $('#qrcode').hide();
        });
    }
</script>