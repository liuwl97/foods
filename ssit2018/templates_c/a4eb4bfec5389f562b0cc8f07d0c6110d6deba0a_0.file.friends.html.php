<?php
/* Smarty version 3.1.30, created on 2018-01-01 09:01:23
  from "I:\php\wamp\www\2018\template\friends.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49f8e36461b4_89005958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4eb4bfec5389f562b0cc8f07d0c6110d6deba0a' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\friends.html',
      1 => 1514797188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a49f8e36461b4_89005958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/friends.css">
	<link rel="stylesheet" href="css/public.css">
</head>

<body>
<div class="main">
	<!--top-->
	<div class="top">
		  <span class="top_left">
		  	<a href="JavaScript:history.back(-1)">
		  		<img src="img/ico-back-left.png" height="50" width="50">
		  	</a>
		  </span>
		  <div class="top_center">
		  	<span class="c-left"><a href="" >最新</a></span>
		  </div>
		  <span class="top_right"><a href="send_friend.php">发话题</a> </span>
	</div>

<form action="" method="post">
<!--循环在这里-->
	<!--personal-->
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['friend']->value, 'friends');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['friends']->value) {
?>
	<div class="personal">
		<div class="p_top">
			<span class="p_top_l left"><img src="<?php echo $_smarty_tpl->tpl_vars['friends']->value->getUser_img();?>
"/></span>
			<div class="p_top_r left">
				<span class="p_top_r_t"><?php echo $_smarty_tpl->tpl_vars['friends']->value->getUsername();?>
</span>
				<span class="p_top_r_b"><?php echo $_smarty_tpl->tpl_vars['friends']->value->getAddtime();?>
</span>
			</div>
		</div>

		<div class="p_cent">
			<span><?php echo $_smarty_tpl->tpl_vars['friends']->value->getTitle();?>
</span>
			<div class="p_cent_img">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['friendimg']->value, 'img');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['img']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['friends']->value->getId() == $_smarty_tpl->tpl_vars['img']->value->getFriendid()) {?>
					<span><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value->getImgpath();?>
"></span>
				<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
			</div>
		</div>

		<div class="p_bot">
			<span class="left">
				<a href="friends_comment.php?id=<?php echo $_smarty_tpl->tpl_vars['friends']->value->getId();?>
" class="p_bot_a"><i></i>评论</a>
			</span>
			
			<span class="right">
				<em><input type="radio" name="radio" class="radio" value="<?php echo $_smarty_tpl->tpl_vars['friends']->value->getId();?>
"></em>
				<i>赞&nbsp;<font style="color:red"><?php echo $_smarty_tpl->tpl_vars['friends']->value->getNum();?>
</font></i>
			</span>
		</div>
	</div>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<!--循环在这里-->
</form>

	

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
					<span><img src="img/icon/圈子ing.png" width="28px" height="28px"></span><i class="locat_ing">圈子</i></a>
				</li>
				<li><a href="myself.php">
					<span><img src="img/icon/我的.png" width="28px" height="28px"></span>我的</a>
				</li>
			</ul>
	</div>

</div>


<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){

	$('.right em').click(function(){
		var checked = $('.right em input[type=radio]:checked');
		var id = checked.val();
		if(id!=""){
			$.ajax({
				type: "POST",
				url: 'friends_Azan.php',
				data: {'radio':$('.right em input[type=radio]:checked').val()},
				success:function(data){	
					var res = JSON.parse(data);
					checked.parent().next().children().text(res['zanshu']);
					checked.parent().css({'background-image':'url(img/icon/zaned.png)'});
				}
			})
		}
		
		
		
	})


	
})
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
