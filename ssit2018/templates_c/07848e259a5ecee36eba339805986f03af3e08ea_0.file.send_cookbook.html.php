<?php
/* Smarty version 3.1.30, created on 2017-12-31 08:22:31
  from "I:\php\wamp\www\2018\template\send_cookbook.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a489e4735e026_41421955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07848e259a5ecee36eba339805986f03af3e08ea' => 
    array (
      0 => 'I:\\php\\wamp\\www\\2018\\template\\send_cookbook.html',
      1 => 1514708280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a489e4735e026_41421955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<title>cooking</title>
	<link rel="stylesheet" href="css/send_cookbook.css">
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
		  <span class="top_center">上传菜谱</span>
		  <span class="top_right"><a href="index.php">返回首页</a> </span>
	</div>
<form action="send_FimgCreate.php" id="myform1" method="post" enctype="multipart/form-data">
	<!--banner-->
	<div class="bann">
		<!-- <input type="file" name="firstfile" class="file"> -->
		<input type="hidden" class="hiddenid" value="<?php echo $_smarty_tpl->tpl_vars['sessuid']->value;?>
">
		<input type="file" name="file[]" class="file" id="firstfile" >
		<img src="img/banner/sendcook.png"  id="foodid1" />
		<input type="button" value="如已选中图片，点击上传" name="uploadimg" class="uploadimg" data-submit1 />
	</div>
</form>

<form action="send_FAllCreate.php" id="myform2" method="post" enctype="multipart/form-data">
	<!--toutiao-->
	<div class="toutiao">
		<div class="toutiao_line">
			<div class="tit cont_1">
				<span class="tit_l left">标&nbsp;&nbsp;题:</span>
				<input type="text" name="title" class="foodname left" placeholder="输入菜名">
			</div>
			<div class="tit cont_1">
				<span class="tit_l left">菜&nbsp;&nbsp;单:</span>
				<input type="text" name="menu" class="foodname left" placeholder="输入菜单名">
			</div>
			<div class="cont cont_1">
				<span class="cont_l left">内&nbsp;&nbsp;容:</span>
				<textarea rows="6" name="content" placeholder="输入介绍"></textarea>
			</div>
		</div>
	</div>


	<!--nav-->
	<div class="nav">
		<ul class="nav_first cont_1">
			<li>
				<span class="nav_img"></span>
				<div class="nav_ms">难度</div>
				<select name="difficulty_level"> 
					<option value="0">简单</option> 
					<option value="1">普通</option>
					<option value="2">困难</option> 
				</select> 
			</li>
			<li>
				<span class="nav_img img1"></span>
				<div class="nav_ms">时间</div>
				<select name="make_time"> 
					<option value="0">1~5分钟</option> 
					<option value="1">5~15分钟</option>
					<option value="2">15~30分钟</option> 
				</select> 
			</li>
			<li>
				<span class="nav_img img2"></span>
				<div class="nav_ms">口味</div>
				<select name="flavor"> 
					<option value="0">甜</option> 
					<option value="1">咸</option>
					<option value="2">辣</option> 
				</select> 
			</li>
		</ul>
	</div>

	

	<!--cont-->
	<div class="paihang">
		<div class="PH_top">
			<span class="PH_tit">食材</span>
		</div>

		<div class="shicai_lay" id="shicai_lay">

			<div class="shicai">
				<span class="shicai_l left">
					<input type="text" name="ingredientname[]" class="ingredients" placeholder="食材">
				</span>
				<span class="shicai_r right">
					<input type="text" name="ingredientamount[]" class="amount" placeholder="量">
				</span>
			</div>
			<div class="shicai">
				<span class="shicai_l left">
					<input type="text" name="ingredientname[]" class="ingredients" placeholder="食材">
				</span>
				<span class="shicai_r right">
					<input type="text" name="ingredientamount[]" class="amount" placeholder="量">
				</span>
			</div>
			<div id="new_shicai"></div>
		</div>
				<div class="addinput" id="addinput">添加一行</div>
	</div>

	<!--做法-->
	<div class="action">
		<div class="PH_top">
			<span class="PH_tit">做法</span>
		</div>

		<div class="action_cont cont_1">
			<div class="action_img left">做法一： <input type="file" name="file[]" id="file" /></div>
			<div class="action_zf right">
				<div class="action_ms">描述：<input type="text" name="practicemes[]"></div>
			</div>
		</div>
		<div class="action_cont cont_1">
			<div class="action_img left">做法一： <input type="file" name="file[]" id="file" /></div>
			<div class="action_zf right">
				<div class="action_ms">描述：<input type="text" name="practicemes[]"></div>
			</div>
		</div>
		<div id="new_addzuofa"></div>
		<div class="addinput" id="addzuofa">添加一行</div>
		
	</div>



	<!--温馨提示-->
	<div class="reminder">
		<div class="PH_top">
			<span class="PH_tit">温馨提示</span>
		</div>

		<div class="rem_cont">
			<textarea rows="6" name="Reminder" placeholder="温馨提示"></textarea>
		</div>
		<div class="addinput" id="submitall">提交</div>
	</div>
</form>	
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


</body>
<?php echo '<script'; ?>
 src="js/jquery-3.1.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/jquery.form.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	$(document).ready(function(){
		//banner图上传
		$("#firstfile").hover(function(){
			$(".uploadimg").show();
		})
		var sessuid = $('.hiddenid').val();
		//alert(sessuid);
		$(".uploadimg").click(function(){
			if(sessuid!="x"){
				var f = $('#firstfile');
				if(f.val()!=""){
					//$("#myform1").submit();
					$(".uploadimg").parents("#myform1").ajaxSubmit(function(data){
						alert("上传banner成功！");
						var res = JSON.parse(data);
						//alert(res['url']);
						$('#foodid1').attr('src',res['url']);
						$(".uploadimg").hide();
					});
				}else{
					alert("还没有上传图片呢~");
				}
			}else{
				alert("您还没有登录呢！");
				return false;
			}
			
		});


		//提交all 第二个表单
			$("#submitall").click(function(){
				if(sessuid!="x"){	
					var f = $('#firstfile');
					if(f.val()!=""){
						$("#myform2").submit();
					}else{
						alert("第一张大图还没上传呢！");
						return false;
					}
				}else{
					alert("您还没有登录呢！");
					return false;
				}
				
			});
	});
			

	/*window.onload= function(){
		var addinput = document.getElementById("addinput");
		addinput.onclick = function(){
			//alert("a");shicai_lay
			document.getElementById("shicai_lay").innerHTML+=('');
   			
		}
	}*/
	
	//添加一行
	$(document).ready(function(){
		$("#addinput").on('click',function(){
			$("#new_shicai").append('<div class="shicai"><span class="shicai_l left"><input type="text"  name="ingredientname[]" class="ingredients" placeholder="食材"></span><span class="shicai_r right"><input type="text" class="amount" name="ingredientamount[]" placeholder="量"></span></div>');
		});
		$("#addzuofa").on('click',function(){
			$("#new_addzuofa").append('<div class="action_cont cont_1"><div class="action_img left">做法一： <input type="file" name="file[]" id="file" /></div><div class="action_zf right"><div class="action_ms">描述：<input type="text" name="practicemes[]"></div></div></div>');
		});
	});
<?php echo '</script'; ?>
>
</html>
<?php }
}
