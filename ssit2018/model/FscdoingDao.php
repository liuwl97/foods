<?php
require_once("BaseDao.php");
require_once("Fscdoing.php");
//require_once("FileDao.php");
class FscdoingDao extends BaseDao{
	

	//发布_商品的做法图
	public function saveimg(Fscdoing $fscdoing){
		$sth = $this->db->prepare("insert into fscdoing(f_id,practiceimg,practicemes) values(:f_id,:practiceimg,:practicemes)");
		$sth->bindValue(':f_id', $fscdoing->getF_id(), PDO::PARAM_INT);
		$sth->bindValue(':practiceimg', $fscdoing->getPracticeimg(), PDO::PARAM_STR);
		$sth->bindValue(':practicemes', $fscdoing->getPracticemes(), PDO::PARAM_STR);
		$sth->execute();			
	}
	
	//发布_商品的量和名字
	public function saveliang($f_id,$ingredientname,$ingredientamount){
		$sth = $this->db->prepare("insert into fscdoing(f_id,ingredientname,ingredientamount) values(:f_id,:ingredientname,:ingredientamount)");
		$sth->bindValue(':f_id', $f_id, PDO::PARAM_INT);
		$sth->bindValue(':ingredientname', $ingredientname, PDO::PARAM_STR);
		$sth->bindValue(':ingredientamount', $ingredientamount, PDO::PARAM_STR);
		$sth->execute();			
	}

	//查看——详情页的食物与量 做法图
	public function findDetailming($fid){
		$sth=$this->db->prepare("select * from fscdoing where f_id=:fid");
		$sth->bindValue(':fid', $fid, PDO::PARAM_INT);
		$sth->execute();
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			
			$fscdoing = new Fscdoing($row['id'], $row['f_id'], $row['ingredientname'], $row['ingredientamount'],$row['practiceimg'], $row['practicemes']);
			
			$array[]=$fscdoing;
		}
		return $array;
	}

	
		// public function save(Fscdoing $fscdoing){
	// 	$sth = $this->db->prepare("insert into fscdoing(f_id,ingredientname,ingredientamount,practiceimg,practicemes) values(:f_id,:ingredientname,:ingredientamount,:practiceimg,:practicemes)");
	// 	$sth->bindValue(':f_id', $fscdoing->getF_id(), PDO::PARAM_INT);
	// 	$sth->bindValue(':ingredientname', $fscdoing->getIngredientname(), PDO::PARAM_STR);
	// 	$sth->bindValue(':ingredientamount', $fscdoing->getIngredientamount(), PDO::PARAM_STR);
	// 	$sth->bindValue(':practiceimg', $fscdoing->getPracticeimg(), PDO::PARAM_STR);
	// 	$sth->bindValue(':practicemes', $fscdoing->getPracticemes(), PDO::PARAM_STR);
	// 	$sth->execute();			
	// }
	
}

//$dao=new FscdoingDao();
//print_r($dao->save(229,"11","11","11","11"));
//print_r($dao->findDetailming(242));
?>