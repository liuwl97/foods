<?php
/* Smarty version 3.1.30, created on 2017-11-30 10:05:05
  from "I:\php\wamp\www\2018\template\DetailPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a1fd7d1ce0372_34417341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ada14de51aebfcaad739c99961c71e99cb40a970' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\DetailPage.html',
      1 => 1512036061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a1fd7d1ce0372_34417341 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/DetailPage.css">
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
		  <span class="top_center">壹点壹客</span>
		  <span class="top_right"><a href="index.php">返回首页</a> </span>
	</div>

	<!--banner-->
	<div class="bann">
		<img src="<?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getImgpath();?>
" />
	</div>

	<!--toutiao-->
	<div class="toutiao">
		<div class="toutiao_line">
			<div class="tit"><?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getTitle();?>
</div>
			<div class="cont"><?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getContent();?>
</div>
		</div>
	</div>


	<!--nav-->
	<div class="nav">
		<ul class="nav_first">
			<li>
				<span class="nav_img"></span>
				<div class="nav_ms">难度：<?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getDifficulty_level();?>
</div>
			</li>
			<li>
				<span class="nav_img img1"></span>
				<div class="nav_ms">时间：<?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getMake_time();?>
</div>
			</li>
			<li>
				<span class="nav_img img2"></span>
				<div class="nav_ms">口味：<?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getFlavor();?>
</div>
			</li>
		</ul>
	</div>

	

	<!--cont-->
	<div class="paihang">
		<div class="PH_top">
			<span class="PH_tit">食材</span>
		</div>

		<div class="shicai_lay">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fooddetail_ming']->value, 'ming');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ming']->value) {
?>
				<?php if ($_smarty_tpl->tpl_vars['ming']->value->getIngredientname() !== '') {?>
				<div class="shicai">
					<span class="left" class="ming"><?php echo $_smarty_tpl->tpl_vars['ming']->value->getIngredientname();?>
</span>
					<span class="right"><?php echo $_smarty_tpl->tpl_vars['ming']->value->getIngredientamount();?>
</span>
				</div>
				<?php }?>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</div>

	</div>

	<!--做法-->
	<div class="action">
		<div class="PH_top">
			<span class="PH_tit">做法</span>
		</div>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fooddetail_ming']->value, 'ming');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ming']->value) {
?>
			<?php if ($_smarty_tpl->tpl_vars['ming']->value->getPracticeimg() !== '') {?>
			<div class="action_cont cont_1">
				<div class="action_img left"><img src="<?php echo $_smarty_tpl->tpl_vars['ming']->value->getPracticeimg();?>
"></div>
				<div class="action_zf right">
					<!-- <div class="cont_span">①</div> -->
					<div class="action_ms"><?php echo $_smarty_tpl->tpl_vars['ming']->value->getPracticemes();?>
</div>
				</div>
			</div>
			<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
		

	</div>



	<!--温馨提示-->
	<div class="reminder">
		<div class="PH_top">
			<span class="PH_tit">温馨提示</span>
		</div>

		<div class="rem_cont">
			<?php echo $_smarty_tpl->tpl_vars['fooddetail']->value->getReminder();?>

		</div>
	</div>
		
	<!--foot-->
	<div class="foot">
			<ul class="foot_first">
				<li><a href="index.php">
						<span>
							<img src="img/icon/首页ing.png" width="28px" height="28px">
						</span>
						<i class="locat_ing">首页</i>
					</a>
				</li>
				<li><a href="friends.php">
					<span><img src="img/icon/圈子.png" width="28px" height="28px"></span>圈子</a>
				</li>
				<li><a href="myself.php">
					<span><img src="img/icon/我的.png" width="28px" height="28px"></span>我的</a>
				</li>
			</ul>
	</div>

</div>

<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>



</body>
</html>
<?php }
}
