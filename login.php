<?php
include 'common.php';

if ($user->hasLogin()) {
    $response->redirect($options->adminUrl);
}
$rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
Typecho_Cookie::delete('__typecho_remember_name');

$bodyClass = 'body-100';

include 'header.php';
?>

<link rel="stylesheet" href="./css/umi.css">
<link rel="stylesheet" href="./css/componments.chunk.css">
<link rel="stylesheet" href="./css/green.css">
<script src="./js/umi.js"></script>







<div class="typecho-login-wrap">
    <div class="typecho-login">
        
        <form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
        <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="box-shadow: rgba(0, 0, 0, 0.05) 0px 0.5rem 2rem;"><div class="row no-gutters"><div class="col-md-12 order-md-1 bg-white"><div class="block-content block-content-full px-lg-4 py-md-4 py-lg-4"><div class="dropdown"><a class="font-w700 font-size-h1" href="#"><span class="text-dark"><?php _e('%s', $menu->title, $options->title); ?></span></a><p class="text-uppercase font-w700 font-size-sm text-muted">
       欢迎回来</p></div><div class="form-group"><input type="text" id="name" name="name" class="form-control form-control-alt" placeholder="用户名"></div><div class="form-group"><input type="password" name="password" id="password" class="form-control form-control-alt" placeholder="密码"></div><div class="form-group"><button type="submit" class="btn btn-block btn-hero-primary"><span><i class="si si-login mr-1"></i>登入</span></button><div class="text-center mt-3"><a class="font-w700 font-size-sm text-muted" href="<?php $options->registerUrl(); ?>">注册</a><div class="ant-divider ant-divider-vertical" role="separator"></div><a class="font-w700 font-size-sm text-muted" href="<?php $options->siteUrl(); ?>">返回主页</a></div></div></div></div></div></div></form>
        
        
        <!--h1><div class="site-logo"><?php _e('%s', $menu->title, $options->title); ?></div></h1>
        <form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
            <p>
                <label for="name" class="sr-only"><?php _e('用户名'); ?></label>
                <input type="text" id="name" name="name" value="<?php echo $rememberName; ?>" placeholder="<?php _e('用户名'); ?>" class="text-l w-100" autofocus />
            </p>
            <p>
                <label for="password" class="sr-only"><?php _e('密码'); ?></label>
                <input type="password" id="password" name="password" class="text-l w-100" placeholder="<?php _e('密码'); ?>" />
            </p>
            <p class="submit">
                <button type="submit" class="btn btn-l w-100 primary"><?php _e('登录'); ?></button>
                <input type="hidden" name="referer" value="<?php echo htmlspecialchars($request->get('referer')); ?>" />
            </p>
            <p>
                <!--label for="remember"><input type="checkbox" name="remember" class="checkbox" value="1" id="remember" /> <?php _e('下次自动登录'); ?></label>
            </p>
        </form>
        
        <p class="more-link">
            <a href="<?php $options->siteUrl(); ?>"><?php _e('返回'); ?></a>
            <?php if($options->allowRegister): ?>
            &bull;
            <a href="<?php $options->registerUrl(); ?>"><?php _e('注册'); ?></a>
            <?php endif; ?>
        </p-->
    </div>
</div>
<?php 
include 'common-js.php';
?>
<script>
$(document).ready(function () {
    $('#name').focus();
});
</script>
<?php
include 'footer.php';
?>
