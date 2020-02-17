<?php
/* Smarty version 3.1.30, created on 2017-11-27 08:30:16
  from "E:\www\2018\template\search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1bcd182046f7_20445436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afa3e09a0677e530ac9838e651f3e008eb30e5b3' => 
    array (
      0 => 'E:\\www\\2018\\template\\search.html',
      1 => 1511771414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1bcd182046f7_20445436 (Smarty_Internal_Template $_smarty_tpl) {
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
				//console.log(data[0][uid]);
				 if(data!=""){
				 	for(var i=0;i<data.length;i++){
				$('.search_res').append('<div class="new_search"><a href="DetailPage.php?id='+data[i][id]+'">'+data[i][title]+"----"+data[i][con]+'</div>');
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
