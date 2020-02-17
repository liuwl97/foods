<?php
/* Smarty version 3.1.30, created on 2017-11-29 07:37:20
  from "I:\php\wamp\www\2018\template\myself_no.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1e63b048e060_60680826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fde211f4d01d4b9d870f5d7bb80b36c79b765050' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\myself_no.html',
      1 => 1511941037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1e63b048e060_60680826 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/myself.css">
	<link rel="stylesheet" href="css/public.css">
</head>

<body>
<div class="main">
	<!--top-->
	<div class="top">我的</div>

	<!--mymes-->
	<div class="mymes">
		<form action="" method="post" id="myform" enctype="multipart/form-data">
		<div class="myes_top">
			<span class="head">
				<img src="img/icon/user.png"/>
				
				
			<input type="file" name="file" class="file" id="file"></span>
			<div class="head_img_mes">点击更换图片</div>
		</form>
			<div class="name">
				游客
			</div>
				
			<input type="hidden" id="hiddener" data='1'>
			<span class="mes1">......</span>
		</div>
		
		
		<div class="myes_but">
			<span class="butt"><a href="login.php">登录</a></span>
			<span class="butt butt1"><a href="register.php">注册</a></span>
		</div>
	</div>

	<!--nav-->
	<div class="nav">
		<ul class="nav_first">
			<li class="li_1"><a href="">作品（0）</a></li>
			<li class="li_2"><a href="">关注（0）</a></li>
			<li class="li_3"><a href="">粉丝 (0)</a></li>
		</ul>
	</div>

	<!--item-->
	<div class="item">
		<ul class="item_ul">
			<li><a href="">我的动态<img src="img/ico-right.png"></a></li>
			<li><a href="">个人资料<img src="img/ico-right.png"></a></li>
		</ul>
	</div>
	<div class="item">
		<ul class="item_ul">
			<li><a href="">我的主页<img src="img/ico-right.png"></a></li>
			<li><a href="">消息通知<img src="img/ico-right.png"></a></li>
			<li class="no"><a href="">设置<img src="img/ico-right.png"></a></li>
		</ul>
	</div>

	
	<div class="item">
		<ul class="item_ul">
			<li class="no disdry"><a href="javascript:;">退出登录</a></li>
		</ul>
	</div>
	<div class="kong"></div>

	<!--foot-->
	<div class="foot">
			<ul class="foot_first">
				<li><a href="index.php">
						<span>
							<img src="img/icon/首页.png" width="28px" height="28px">
						</span>
						首页
					</a>
				</li>
				<li><a href="friends.php">
					<span><img src="img/icon/圈子.png" width="28px" height="28px"></span>圈子</a>
				</li>
				<li><a href="myself.php">
					<span><img src="img/icon/我的ing.png" width="28px" height="28px"></span><i class="locat_ing">我的</i></a>
				</li>
			</ul>
	</div>

</div>



<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.form.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	
	var name = $("#hiddener").attr('data');
	//2、显示or隐藏登录注册按钮/退出登录按钮
	if(name=="1"){
		$(".myes_but").show();
		$(".disdry").css('display','none');
	}
	//3、默认头像
	// var src = $(".head img").attr('src');
	// if(src == ""){
	// 	$(".head img").src="img/icon/user.png";
	// }

	/*
	 **更换头像*/
	$(".head").hover(function(){
		$('.head_img_mes').stop(true,false).animate({'top':'17px','opacity':1},30).show();
		
	},function(){
		$('.head_img_mes').stop(true,false).animate({'top':'-25px','opacity':0},30).hide();
	})
	//更换头像操作
		$("#file").change(function(){
			if($("#hiddener").attr('data')!="1"){
				var mes = "确定要更改头像吗？";
				if(confirm(mes) ==true){
					$("#myform").ajaxSubmit(function(){
						window.location.reload();//刷新当前页面.
						alert("上传头像成功成功！");
				});
					return true;
				}else{
					alert("跟换头像没有成功~");
					return false;
				}
			}else{
				alert("请先登录");
				return false;
			}
			
		})
	

	//退出登录
	$(".disdry a").click(function(){
		if(confirm("确定要退出当前登录吗")){
			window.location.href = 'auth_out.php';

			return true;
		}else{
			return false;
		}
	})
	

});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
