<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");
require("libs/Smarty.class.php");
require_once("model/FriendDao.php");

$smarty = new Smarty();
	
	$id = $_GET['id'];
	//echo $id;
	$frienddao=new FriendDao();
	$user = $frienddao->findByidfriend($id);//select this user mes
	$img = $frienddao->findbyidlmg($id);//select this user img
	$img = $frienddao->findbyidlmg($id);//select this user img
	$count = $frienddao->countcomm($id);//select this user countcomment
	$usermes = $frienddao->findbyidmes($id);//select this user commentusermes

	$smarty->assign("user", $user);
	$smarty->assign("img", $img);
	$smarty->assign("count", $count);
	$smarty->assign("usermes", $usermes);

	if($_SESSION['sessuid']==""){
		$_SESSION['sessuid']="x";
	}
	$smarty->assign("sessuid", $_SESSION['sessuid']);

	$smarty->display("template/friend_comment.html");

?>