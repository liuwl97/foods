<?php
header("Content-Type: text/html; charset=utf-8");
require_once("BaseDao.php");
require_once("Friendimg.php");
class FriendimgDao extends BaseDao{
	
	/*sendbook*/
	//first Foodimg
	public function saveimg(Friendimg $friendimg){
		$sth = $this->db->prepare("insert into friendimg(friendid,uid,imgpath) values(:friendid,:uid,:imgpath)");
		$sth->bindValue(':friendid', $friendimg->getFriendid(), PDO::PARAM_INT);
		$sth->bindValue(':uid', $friendimg->getUid(), PDO::PARAM_INT);
		$sth->bindValue(':imgpath', $friendimg->getImgpath(), PDO::PARAM_STR);
		$sth->execute();			
	}
	
}

//$dao=new FoodDao();
//$dao->findnewid();
//print_r($dao->savee("abc.ppp"));
//print_r($dao->upadtefood("11","11","11","11","11","11","1111",229));
//$dao->sreachFood("1");
?>