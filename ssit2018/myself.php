<?php
session_start();
require("libs/Smarty.class.php");
require_once("model/UserDao.php");
require_once("model/FoodDao.php");
$smarty = new Smarty();
//echo "===========".$_SESSION['sessuid']."===========";
		if($_SESSION['sessuid']!='x'){
			$userdao=new UserDao();
			$fooddao=new FoodDao();
			$userimg = $userdao->finByUserimg($_SESSION['sessuid']);
			$foodbyid = $fooddao->findfoodbyid($_SESSION['sessuid']);//发了多少条菜谱
			$sendcount = $fooddao->findsendbyid($_SESSION['sessuid']);//发了多少条话题
			$smarty->assign("userimg", $userimg);
			$smarty->assign("foodbyid", $foodbyid);
			$smarty->assign("sendcount", $sendcount);
			$smarty->assign("sessuid", $_SESSION['sessuid']);
			$smarty->display("template/myself.html");
		}else{
			$smarty->assign('sessuid','x');
			$smarty->display("template/myself.html");
		}
		
		
		
	
	
		
	


?>