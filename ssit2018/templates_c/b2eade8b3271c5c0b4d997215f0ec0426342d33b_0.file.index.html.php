<?php
/* Smarty version 3.1.30, created on 2017-12-10 08:35:53
  from "I:\php\wamp\www\2018\template\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2cf1e95b0238_59017289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2eade8b3271c5c0b4d997215f0ec0426342d33b' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\index.html',
      1 => 1512894952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2cf1e95b0238_59017289 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/public.css">
	<link href="css/WeUIcss/swiper.min.css" rel="stylesheet">
</head>

<body>
<div class="main">
	<!--top-->
	<div class="top">
		<a href="index.php"><span class="top_left"></span></a>
		<div class="top_center">
		  	<input type="search" class="search" onfocus="new_search()" />
		  	<!-- <input type="button" value="搜索" class="seand" /> -->
		  	
		</div>
		<span class="top_right"><a href="send_cookbook.php">发菜谱</a></span>
	</div>

	<!--图片轮播-->
		<div class="swiper-container swiper1">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide" style="position: relative;">
		            <img src="img/banner/2.jpg" />
		            </div>
		        <div class="swiper-slide" style="position: relative;">
		            <img src="img/banner/3.jpg" />
		        </div>
		       
		    </div>
		    <!-- Add Pagination -->
		    <div class="swiper-pagination swiper-pagination1"></div>
		</div>
    
    
	<!--nav-->
	<div class="nav">
		<ul class="nav_first">
			<li><div><img src="img/icon/细胞抗衰老.png"></div>健康</li>
			<li><div><img src="img/icon/抗衰老.png"></div>缓老</li>
			<li><div class="bigimg"><img src="img/icon/预防.png"><br/><i>预防</i></div></li>
		</ul>
	</div>

	<!--toutiao-->
	<div class="toutiao">
		<div class="toutiao_line">
			<div class="toutiao_l">头条<br>新闻</div>
			<div class="toutiao_c"></div>
			<div class="toutiao_r">
				<div id="Marquee">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['news']->value, 'new');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
?>
					<div class="marquee">
						<div class="tt_r_b">标题:<?php echo $_smarty_tpl->tpl_vars['new']->value->getTitle();?>
</div>
						<div class="tt_r_t">内容:<?php echo $_smarty_tpl->tpl_vars['new']->value->getCont();?>
</div>
					</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
				</div>
			</div>
		</div>
	</div>

	<!--cont-->
	<div class="paihang">
		<div class="PH_top">
			<span class="PH_img"></span>
			<span class="PH_tit">流行与排行</span>
		</div>
		<div class="PH_bottom">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['food']->value, 'foods');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['foods']->value) {
?>
			<div class="cont_1">
				<div class="cont_1_img">
					<a href="DetailPage.php?id=<?php echo $_smarty_tpl->tpl_vars['foods']->value->getId();?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['foods']->value->getImgpath();?>
" /></a>
				</div>
				<div class="cont_1_neirong">
					<div class="cont_tit">
						<a href="DetailPage.php?id=<?php echo $_smarty_tpl->tpl_vars['foods']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['foods']->value->getTitle();?>
</a>
					</div>
					<div class="cont_lay"><span style="color: red">菜单</span>：<?php echo $_smarty_tpl->tpl_vars['foods']->value->getMenu();?>
</div>
				</div>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			
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
>
 var Mar = document.getElementById("Marquee"); 
        var child_div=Mar.getElementsByClassName("marquee") 
        var picH = 38;//移动高度 
        var scrollstep=3;//移动步幅,越大越快 
        var scrolltime=20;//移动频度(毫秒)越大越慢 
        var stoptime=2000;//间断时间(毫秒) 
        var tmpH = 0; 
        Mar.innerHTML += Mar.innerHTML; 
        function start(){ 
            if(tmpH < picH){ 
                tmpH += scrollstep; 
                if(tmpH > picH )tmpH = picH ; 
                Mar.scrollTop = tmpH; 
                setTimeout(start,scrolltime); 
            }else{ 
                tmpH = 0; 
                Mar.appendChild(child_div[0]); 
                Mar.scrollTop = 38; 
                setTimeout(start,stoptime); 
            } 
        } 
window.onload = function(){
	setTimeout(start,stoptime)

}
//跳转到search页面
function new_search(){
	window.location.href = 'search.php';
}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/swiper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
			//轮播图js
			var swiper1 = new Swiper('.swiper1', {
				pagination: '.swiper-pagination1',
				paginationClickable: true,
				spaceBetween: 0,
				loop: true,
				autoplay: 2500
		
	
			});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
