<?php
/* Smarty version 3.1.30, created on 2017-11-30 08:09:49
  from "I:\php\wamp\www\2018\template\send_friend.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fbccdeb68d6_03706347',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac59b287c1de99181a3c60d6b9fbe72ce103da95' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\send_friend.html',
      1 => 1512029388,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fbccdeb68d6_03706347 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/send_friend.css">
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
		  	<span>发话题</span>
		  </div>
	</div>

<form action="send_friendCreate.php" method="post" class="myform" enctype="multipart/form-data">
	<!--personal-->
	<div class="personal">
		<div class="p_cent">
			<div class="p_title"><input type="text" name="title" placeholder="输入你的想法..."></div>
			<input type="hidden" name="sessuid" value="<?php echo $_smarty_tpl->tpl_vars['sessuid']->value;?>
">
			<div class="p_cent_img">
				点击上传图片：
				<span>
					<em><input type="file" name="file[]" class="file"></em>
					<em><input type="file" name="file[]" class="file"></em>
					<em><input type="file" name="file[]" class="file"></em>
				</span>
			</div>
		</div>
	</div>

	<div class="send_friend_but" data="<?php echo $_smarty_tpl->tpl_vars['sessuid']->value;?>
">发布</div><!-- <?php echo $_smarty_tpl->tpl_vars['Think']->value['session']['uid'];?>
 -->
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
	
		$('.file:eq(0)').change(function(){
			var file = this.files[0] ? this.files[0] : null;
			if (!file) { return false; }
			var file_reader = new FileReader();
			file_reader.onload = (function(){
		    	var image_url = this.result;  // 这是图片的路径
		  		var s = image_url;
		    	$('em:eq(0)').css({"background-image":"url("+s+")"});  // 创建图片标签
		    });
		    file_reader.readAsDataURL(file);
			
		});

		$('.file:eq(1)').change(function(){
			var file = this.files[0] ? this.files[0] : null;
			if (!file) { return false; }
			var file_reader = new FileReader();
			file_reader.onload = (function(){
		    	var image_url = this.result;  // 这是图片的路径
		  		var s = image_url;
		    	$('em:eq(1)').css({"background-image":"url("+s+")"});  // 创建图片标签
		    });
		    file_reader.readAsDataURL(file);
			
		});

		$('.file:eq(2)').change(function(){
			var file = this.files[0] ? this.files[0] : null;
			if (!file) { return false; }
			var file_reader = new FileReader();
			file_reader.onload = (function(){
		    	var image_url = this.result;  // 这是图片的路径
		  		var s = image_url;
		    	$('em:eq(2)').css({"background-image":"url("+s+")"});  // 创建图片标签
		    });
		    file_reader.readAsDataURL(file);
			
		});
	
		$('.send_friend_but').click(function(){
			if($(this).attr('data')=="x"){
				alert('还没登录，请先登录！');
			}else{
				$(this).parents('form').submit();
			}
			
		})
	

});
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
