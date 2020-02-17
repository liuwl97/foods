<?php
require_once("model/FoodDao.php");
require_once("model/FscdoingDao.php");
$fooddao = new FoodDao();
$fsdoingdao = new FscdoingDao();


//1、获取send_cookbook里input的值
	$title = $_POST['title'];
	$menu = $_POST['menu'];
	$content = $_POST['content'];
	$difficulty_level = $_POST['difficulty_level'];
	$make_time = $_POST['make_time'];
	$flavor = $_POST['flavor'];
	$Reminder = $_POST['Reminder'];

	$ingredientname = $_POST['ingredientname'];//var_dump($ingredientname); array(size =2)
	$ingredientamount=$_POST['ingredientamount'];
	$practicemes = $_POST['practicemes'];//做法
	//echo $ingredientname[0]; 


//2、获取刚刚插入food表中的id
	$newid = $fooddao->findnewid();

//3、更新刚刚插入food表的数据
	$fooddao->upadtefood($menu,$title,$content,$difficulty_level,$make_time,$flavor,$Reminder,$newid);



//4、保存的是食物名、量这块
//if(count($ingredientname)!= 0 && $ingredientamount!= 0 ){
	for ($i=0; $i<count($ingredientname); $i++) {
		$fsdoingdao->saveliang($newid,$ingredientname[$i],$ingredientamount[$i]);
	}
//}




//5、保存的是img这一块
$uploaddir = 'upload/';
for ($i=0; $i<count($_FILES['file']['tmp_name']); $i++) {
	// echo $_FILES['file']['tmp_name'][$i]."99999999";
	$uploadfile = $uploaddir . basename($_FILES['file']['name'][$i]);
	if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $uploadfile)) {
		$extname = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);
		//$id,$f_id, $ingredientname, $ingredientamount, $practiceimg,$practicemes
		$file = new Fscdoing("", $newid,"", "", $uploaddir.$_FILES['file']['name'][$i],  $practicemes[$i]);
		$fsdoingdao->saveimg($file);
	}
}

header('Location:index.php');



?>