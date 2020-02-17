<?php
/* Smarty version 3.1.30, created on 2017-12-24 07:38:09
  from "I:\php\wamp\www\2018\template\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3f5961398ab1_93382125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d7e0e87f39f7fa1ae71b70c8692942046108dd3' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\register.html',
      1 => 1514098863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3f5961398ab1_93382125 (Smarty_Internal_Template $_smarty_tpl) {
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
	<link rel="stylesheet" href="css/register.css">
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
		  	<a href="login.php">
		  		<img src="img/ico-back-left.png" height="50" width="50">
		  	</a>
		  </span>
		  <span class="top_center">注册</span>
		  <span class="top_right"><a href="login.php">登录</a></span>
	</div>
	<!--content-->
	<div class="cont">
		<form id="form" action="auth_zc.php" method="post" onsubmit="return checkregister(this)">
			<div class="cont_name">
				<div class="cont_img"></div>
				<input type="text" name="username" placeholder="请输入用户名" />
				<span class="cont_mes1" id="cont_mes1"></span>
			</div>

			<div class="cont_pwd">
				<div class="cont_img1"></div>
				<input type="password" name="password" placeholder="请输入密码" />
				<span class="cont_mes2"></span>
			</div>

			<div class="cont_pwd">
				<div class="cont_img1"></div>
				<input type="password" name="password1" placeholder="确认密码" />
				<span class="cont_mes3"></span>
			</div>

			<input type="submit" class="cont_login" name="sub_zhuce" value="注册" >
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
	
	//查询用户名是否已经存在
	$("input[name='username']").change(function(){
		$.ajax({
			type: "POST",
			url: 'auth_zc.php',
			data: $("#form").serialize(),
			success:function(data){	//jsonstring
				var res = JSON.parse(data);//obj
				if(res['status']==0){//username不可用
					$(".cont_mes1").show().css("color","red").html(res['mes']);
				}
				if(res['status']==1){//username可用
					$(".cont_mes1").show().css("color","#999").html(res['mes']);
				}
			}
		})
	});
	

<?php echo '</script'; ?>
>

</body>
</html><?php }
}
