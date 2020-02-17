<?php
/* Smarty version 3.1.30, created on 2018-01-01 08:42:32
  from "I:\php\wamp\www\2018\template\myself.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49f478892177_33993421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb1120686368d0f8c9d94cb8c2a93cc520c1a945' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\myself.html',
      1 => 1514796149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a49f478892177_33993421 (Smarty_Internal_Template $_smarty_tpl) {
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
		<form action="myself_UimgCreate.php" method="post" id="myform" enctype="multipart/form-data">
		<div class="myes_top">
			<span class="head">
				<?php if ($_smarty_tpl->tpl_vars['sessuid']->value == "x") {?>
				<img src="img/icon/user.png"/>
				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['userimg']->value->getUser_img() == '') {?>
						<img src="img/icon/user.png"/>
					<?php } else { ?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['userimg']->value->getUser_img();?>
"/>
					<?php }?>
				<?php }?>
				<input type="file" name="file" class="file" id="file" >
			</span>

			<div class="head_img_mes">点击更换图片</div>
		</form>
			<div class="name">
			<?php if ($_smarty_tpl->tpl_vars['sessuid']->value != "x") {?>
					<?php echo $_smarty_tpl->tpl_vars['userimg']->value->getUsername();?>

			<?php } else { ?>
			游客
			<?php }?>
			</div>
				<input type="hidden" id="hiddener" data="<?php echo $_smarty_tpl->tpl_vars['sessuid']->value;?>
">
			<span class="mes1"><?php if ($_smarty_tpl->tpl_vars['sessuid']->value != 'x') {
echo $_smarty_tpl->tpl_vars['userimg']->value->getEmail();
}?></span>
		</div>
		
		
		<div class="myes_but">
			<span class="butt"><a href="login.php">登录</a></span>
			<span class="butt butt1"><a href="register.php">注册</a></span>
		</div>
	</div>

	<!--nav-->
	<div class="nav">
		<ul class="nav_first">
			<li class="li_1"><a href="">作品（<?php if ($_smarty_tpl->tpl_vars['sessuid']->value != 'x') {
echo $_smarty_tpl->tpl_vars['foodbyid']->value;
} else { ?>0<?php }?>）</a></li>
			<li class="li_2"><a href="">话题（<?php if ($_smarty_tpl->tpl_vars['sessuid']->value != 'x') {
echo $_smarty_tpl->tpl_vars['sendcount']->value;
} else { ?>0<?php }?>）</a></li>
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
	if(name=="x"){
		$(".myes_but").show();
		$(".disdry").hide();
	}else{
		$(".myes_but").hide();
		$(".disdry").show();
	}

	/*
	 **更换头像*/
	$(".head").hover(function(){
		$('.head_img_mes').stop(true,false).animate({'top':'17px','opacity':1},30).show();
		
	},function(){
		$('.head_img_mes').stop(true,false).animate({'top':'-25px','opacity':0},30).hide();
	})
	//更换头像操作
		$("#file").change(function(){
			if($("#hiddener").attr('data')!="x"){

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
			alert('退出成功！');

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
