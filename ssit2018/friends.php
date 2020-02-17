<?php
header("Content-Type: text/html; charset=UTF-8");
require("libs/Smarty.class.php");
require_once("model/FriendDao.php");

$smarty = new Smarty();
	$frienddao=new FriendDao();
	$friend=$frienddao->findallfriend();
	$friendimg=$frienddao->findalllmg();
	//var_dump($friendimg);
	$smarty->assign("friend", $friend);
	$smarty->assign("friendimg", $friendimg);
	
	$smarty->display("template/friends.html");

?>