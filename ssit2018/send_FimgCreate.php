<?php
session_start();
require_once("model/FoodDao.php");

$fooddao = new FoodDao();

	if($_SESSION['sessuid']!="x"){
		//var_dump($_FILES['file']);
		$uploaddir = 'upload/';

 	//var_dump($_FILES['file']['name'][0]); 
 		$uploadfile = $uploaddir . basename($_FILES['file']['name'][0]);
 	//var_dump( $uploadfile);die;
 		if (move_uploaded_file($_FILES['file']['tmp_name'][0], $uploadfile)) {
			$extname = pathinfo($_FILES['file']['name'][0], PATHINFO_EXTENSION);
			//$id,$uid, $menu, $title,
			//$content,$filename,$imgpath,$difficulty_level,
			//$make_time,$flavor,$Reminder,$addtime
	 		$food = new Food("",$_SESSION['sessuid'],"","","",$_FILES['file']['name'][0], $uploadfile,"","","","","");
	 		//var_dump($food);
	 		$fooddao->save($food);
 		}
 		$data['url'] = $uploadfile;
 		echo json_encode($data);
	}else{
		echo "<script>alert('您还没登录！');</script>";
	}
	
?>