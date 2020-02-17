<?php
session_start();
header("Content-Type: text/html; charset=UTF-8");
require_once("model/FriendcommentDao.php");

	//发表评论
	$friendcommdao=new FriendcommentDao();

	$comment = $_POST['comment'];
	$wenzhangid = $_POST['wenzhangid'];
	$sessuid = $_SESSION['sessuid'];

	$friendcommdao->sendcomm($sessuid,$wenzhangid,$comment);
	
