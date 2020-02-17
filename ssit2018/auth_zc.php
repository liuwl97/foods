<?php
header("Content-Type: text/html;charset=utf-8");
session_start();
require_once("model/UserDao.php");

$dao=new UserDao();
//获取ajax传入的数据
$username=$_POST['username'];
$password=$_POST['password'];

//1、判断用户是否点击的是注册按钮
if(!isset($_POST['sub_zhuce'])){
	//2、(否)username框文字检查
	$user=$dao->finByUsername($username);
	if($user->getUid() != ""){
		$data['status'] =0;
		$data['mes'] ="用户名已存在！";
	}else{
		$data['status'] =1;
		$data['mes'] ="此用户名可用";
	}
	echo json_encode($data);
	
}else{//是
	if($_SESSION['sessuid']=="x"){
		$dao->register($username,$password);
		$new_id = $dao->finNewRegister();//找到刚刚插入的记录
		$_SESSION['sessuid']=$new_id->getUid();
		header("Location:index.php");
	}else{
		echo "<script>alert('请先退出当前用户');javascript:history.go(-1);</script>";
	}
}	



?>