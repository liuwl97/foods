<?php
header("Content-Type: text/html; charset=UTF-8");
require_once("model/FriendcommentDao.php");

	//1、点赞功能
	//echo $_POST['radio'];
	$friendcommdao=new FriendcommentDao();
	$friendcommdao->addzhanByid($_POST['radio']);

	//2、查看赞的个数
	$countzan=$friendcommdao->countzan($_POST['radio']);
	$data['zanshu']=$countzan;

	echo json_encode($data);



?>