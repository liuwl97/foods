<?php
header("Content-Type: text/html; charset=UTF-8");
require("libs/Smarty.class.php");
require_once("model/FriendDao.php");

$smarty = new Smarty();
	//1、点赞功能
	//echo $_POST['radio'];
	$frienddao=new FriendDao();
	$friend=$frienddao->addzhanByid($_POST['radio']);

	//2、查看赞的个数
	$countzan=$frienddao->countzan($_POST['radio']);
	$data['zanshu']=$countzan;
	echo json_encode($data);
