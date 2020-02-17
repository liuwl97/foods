<?php
session_start();
require_once("model/UserDao.php");

$userdao = new UserDao();

	//echo $_SESSION['sessuid'];
	//var_dump($_FILES['file']['name']);
		$uploaddir = 'upload/';

 	//var_dump($_FILES['file']['name'][0]); 
 		$uploadfile = $uploaddir . basename($_FILES['file']['name']);
 	//echo $uploadfile;
 		if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
			//$uid, $username, $password, $user_img,$email,$tel,$datetime
	 		$user = new User("","","",$uploadfile,"","","");
	 		$userdao->updateUserimg($user,$_SESSION['sessuid']);
 		}


 		// $data['url'] = $uploadfile;
 		// echo json_encode($data);
	
?>