<?php
/* Smarty version 3.1.30, created on 2017-12-24 07:38:07
  from "I:\php\wamp\www\2018\template\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f595f793192_69756216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6d316f69e528a60b9d9489b39e3da13142afdfa' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\login.html',
      1 => 1514098616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3f595f793192_69756216 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>cooking</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<!--<link rel="stylesheet" href="css/bootstrap.min.css">  
	<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>-->
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="css/public.css">
	<?php echo '<script'; ?>
 src="js/check.js"><?php echo '</script'; ?>
>
</head>

<body>
<div class="main">
	<!--top-->
	<div class="top">
		  <span class="top_left">
		  	<a href="myself.php">
		  		<img src="img/ico-back-left.png" height="50" width="50">
		  	</a>
		  </span>
		  <span class="top_center">登录</span>
		  <span class="top_right"><a href="register.php">注册</a> </span>
	</div>
	<!--content-->
	<div class="cont">
		<form id="form" method="post" action="auth_dl.php" onsubmit="return checklogin(this)">
			<div class="cont_name">
				<div class="cont_img"></div>
				<input type="text" name="username" placeholder="请输入用户名" />
				<span class="cont_mes1">请按格式正确的输入！</span>
			</div>

			<div class="cont_pwd">
				<div class="cont_img1"></div>
				<input type="password" name="password" placeholder="请输入密码" />
				<span class="cont_mes2">请按格式正确的输入！</span>
			</div>
			
			
			<input type="submit" class="cont_login" value="登录">
			<div class="cont_miss"><a href="">忘记密码?</a></div>
		</form>
	</div>
	
</div>



<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$('.cont').height($(window).height());
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
