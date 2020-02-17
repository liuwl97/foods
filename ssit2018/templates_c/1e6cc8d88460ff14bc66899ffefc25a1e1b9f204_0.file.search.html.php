<?php
/* Smarty version 3.1.30, created on 2018-01-01 09:02:37
  from "I:\php\wamp\www\2018\template\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a49f92d1e86c8_04807395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e6cc8d88460ff14bc66899ffefc25a1e1b9f204' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\search.html',
      1 => 1514793814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a49f92d1e86c8_04807395 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/public.css">
</head>

<body>
<div class="main">

	<!--top-->
	<div class="top">
		<form action="" method="post">
			<div class="top_center cont_1">
			  	<input type="text" class="search" name="search" autocomplete="off" />
			</div>
			<span class="top_right"><a href="index.php">取消</a></span>
		</form>
	</div>
		<div class="search_res"></div>

		<div class="love">
			<span class="cnxh">猜你喜欢</span>
			<div class="love_mes">
				<div class="shiwu">苹果排骨</div>
				<div class="shiwu">香蕉炖排骨</div>
				<div class="shiwu">葡萄奶酥</div>
				<div class="shiwu">榴莲炖鸡</div>
				<div class="shiwu">苹果淮山</div>
			</div>

		</div>
	
	



<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$('input[type=text]').keyup(function(){
		$('.search_res').show();
		//$(this).parents('form').submit();
		//\u0000Food\u0000uid
		
		$.ajax({
			type: "POST",
			url: 'search_ajaxdata.php?'+Math.random(),
			data:{search:$('.search').val()},
			dataType:"json",
			success:function(data){	
				//alert(typeof(data));
				var id = '\u0000Food\u0000id';
				var title = '\u0000Food\u0000title';
				var con = '\u0000Food\u0000content';
				//console.log(data[0][con]);
				 if(data!=""){
				 	for(var i=0;i<data.length;i++){
				$('.search_res').append('<div class="new_search"><a href="DetailPage.php?id='+data[i][id]+'">'+data[i][title]+"----"+data[i][con].substring(0,20)+"..."+'</div>');
				 	}
				 }else{
				 	$('.search_res').html('<div class="new_search">未找到相关内容！</div>');
				 }
				
			}	
		
		});
		//执行一次，清空一次
		$('.search_res').html("");
	
	});
		
		
	
})
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
