<?php
require_once("model/FriendDao.php");
require_once("model/FriendimgDao.php");
$frienddao = new FriendDao();
$friendimgdao = new FriendimgDao();

//1、获取send_friend里input的值
	$title = $_POST['title'];
	$sessuid = $_POST['sessuid'];
	$frienddao->sendfriend($sessuid,$title);

//1-1、查询刚刚插入send_friend的id
	$newid = $frienddao->findnewfriendId();


//2、保存图片
$uploaddir = 'upload/';
for ($i=0; $i<count($_FILES['file']['tmp_name']); $i++) {
	// echo $_FILES['file']['tmp_name'][$i]."99999999";
	$uploadfile = $uploaddir . basename($_FILES['file']['name'][$i]);
	if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile)) {
		$extname = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
		//$id,$friendid, $uid, $imgpath
		$file = new Friendimg("", $newid, $sessuid, $uploaddir.$_FILES['file']['name'][$i]);
		$friendimgdao->saveimg($file);
	}
}

header('Location:friends.php');



?>