<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");
require("libs/Smarty.class.php");
require_once("model/FriendDao.php");

$smarty = new Smarty();
	
	$frienddao=new FriendDao();
	$friend=$frienddao->findallfriend();
	$friendimg=$frienddao->findalllmg();
	//var_dump($friendimg);

	if($_SESSION['sessuid']==""){
		$_SESSION['sessuid']="x";
	}
	$smarty->assign("friend", $friend);
	$smarty->assign("friendimg", $friendimg);
	$smarty->assign("sessuid", $_SESSION['sessuid']);
	$smarty->display("template/send_friend.html");

?>