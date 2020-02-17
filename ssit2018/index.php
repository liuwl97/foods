<?php
header("Content-Type: text/html; charset=UTF-8");
require("libs/Smarty.class.php");
require_once("model/NewsDao.php");
require_once("model/FoodDao.php");

$smarty = new Smarty();

//echo "===========".$_SESSION['sessuid']."===========";
	//滚动新闻
	$newsdao=new NewsDao();
	$news=$newsdao->findnews();

	//排行流行
	$fooddao=new FoodDao();
	$food = $fooddao->lxph();


	$smarty->assign("news", $news);
	$smarty->assign("food", $food);

	$smarty->display("template/index.html");

?>