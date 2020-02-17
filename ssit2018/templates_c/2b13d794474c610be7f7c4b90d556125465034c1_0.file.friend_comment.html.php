<?php
/* Smarty version 3.1.30, created on 2017-11-30 07:41:59
  from "I:\php\wamp\www\2018\template\friend_comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fb64720f8c3_52547220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b13d794474c610be7f7c4b90d556125465034c1' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\friend_comment.html',
      1 => 1512027717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fb64720f8c3_52547220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/friend_comment.css">
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
		  	<span class="c-left"><a href="" >详情</a></span>
		  </div>
		  
	</div>

	<!--personal-->
	<div class="personal">
		<div class="p_top">
			<span class="p_top_l left"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value->getUser_img();?>
" /></span>
			<div class="p_top_r left">
				<span class="p_top_r_t"><?php echo $_smarty_tpl->tpl_vars['user']->value->getUsername();?>
</span>
				<span class="p_top_r_b"><?php echo $_smarty_tpl->tpl_vars['user']->value->getAddtime();?>
</span>
			</div>
		</div>

		<div class="p_cent">
			<span><?php echo $_smarty_tpl->tpl_vars['user']->value->getTitle();?>
</span>
			<div class="p_cent_img">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['img']->value, 'imgs');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imgs']->value) {
?>
					<span><img src="<?php echo $_smarty_tpl->tpl_vars['imgs']->value->getImgpath();?>
"></span>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

				
			</div>
		</div>

		<form action="" method="post">
		<!--comment-->
		<div class="comment">
			<div class="comm">
				<span class="comm_tit">共有<i class="comm_count"> <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 </i>条评论</span>
				<div class="comm_send">
					<input type="text" name="comment" class="comm_send_input" placeholder="输你所想...">
					<span class="comm_click" data="<?php echo $_smarty_tpl->tpl_vars['sessuid']->value;?>
">评论</span>
					<input type="hidden" name="wenzhangid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getid();?>
">
				</div>
			</div>
		</div>
		</form>

		<form action="" method="post">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usermes']->value, 'usermess');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usermess']->value) {
?>
			<div class="comm_mes">
				<div class="p_top_1">
					<span class="p_top_l_1 left"><img src="<?php echo $_smarty_tpl->tpl_vars['usermess']->value->getUser_img();?>
" /></span>
					<div class="p_top_r_1 left">
						<?php if ($_smarty_tpl->tpl_vars['user']->value->getUid() == $_smarty_tpl->tpl_vars['usermess']->value->getUid()) {?>
							<span class="p_top_r_1_t left"><?php echo $_smarty_tpl->tpl_vars['usermess']->value->getUsername();?>
</span>
							<div class="louzhu left">楼主</div>
						<?php } else { ?>
							<span class="p_top_r_1_t left"><?php echo $_smarty_tpl->tpl_vars['usermess']->value->getUsername();?>
</span>
						<?php }?>
						<span class="p_top_r_1_b "><?php echo $_smarty_tpl->tpl_vars['usermess']->value->getAddtime();?>
</span>
						<div class="comm_cont"><?php echo $_smarty_tpl->tpl_vars['usermess']->value->getComment();?>
</div>
					</div>
					<span class="right">
							<em><input type="radio" name="radio" value="<?php echo $_smarty_tpl->tpl_vars['usermess']->value->getId();?>
"></em> <!-- <?php echo $_smarty_tpl->tpl_vars['vo']->value['id'];?>
 -->
							<i>赞&nbsp;<font style="color:red"><?php echo $_smarty_tpl->tpl_vars['usermess']->value->getNum();?>
</font></i>
						</span>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</form>
	</div>

	


	

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
	
	//点赞
	$('.right em').click(function(){
		var checked = $('.right em input[type=radio]:checked');
		var id = checked.val();
		//alert(id);
			 if (id!="") {
    				//$(this).parents('form').submit();
		  		$.ajax({
					type:"POST",
					url: "friends_commentAzan.php",
					data:{radio:$('.right em input[type=radio]:checked').val()},
					success:function(data){
						var res = JSON.parse(data);
						//alert(res);
						checked.parent().next().children().text(res['zanshu']);
						checked.parent().css({'background-image':'url(img/icon/zaned.png)'});
					}
				});
		     }
	})

	//评论
	$('.comm_click').click(function(){
		var uid = $('.comm_click').attr('data');
		//alert(uid);
		if(uid!="x"){
			//$(this).parents('form').submit();
			$.ajax({
				type:"POST",
				url:'friends_commentsend.php',
				data: $('form').serialize(),
				success:function(data){
					//alert(res.comment);
					$('.new').hide();
					 window.location.reload();
					
				}
			});
		}else{
			alert("登录过后才能进行评论！");return false;
		}
		
	})

})
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
