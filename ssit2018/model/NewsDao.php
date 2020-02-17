<?php
header("Content-Type: text/html; charset=UTF-8");
require_once("BaseDao.php");
require_once("News.php");
//require_once("FileDao.php");
class NewsDao extends BaseDao{
	
	//根据帐号密码来查询
	public function findnews(){
		$sth=$this->db->prepare("select * from news");
		$sth->execute();	
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$news = new News($row['n_id'], $row['title'], substr($row['cont'],0,42)."...");
			$array[]=$news;
		}
		return $array;
	}
	
	
}
//$dao=new NewsDao();
//print_r($dao->findnews());

?>