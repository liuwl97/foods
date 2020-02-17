<?php
session_start();
require_once("model/UserDao.php");

$dao=new UserDao();
//查询用户名是否存在
$user=$dao->finByUsername($_POST['username']);
if($user->getUid()!= ""){
	if($user->getPassword()==$_POST['password']){
		//echo "success";	
		$_SESSION['sessuid']=$user->getUid();
		$_SESSION['susername']=$user->getUsername();
		header('Location:index.php');
	}else{
		echo "password_is_error";	
	}
}else{
		echo "username_is_not_exist";	
}
?>