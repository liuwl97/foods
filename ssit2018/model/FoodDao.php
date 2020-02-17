<?php
header("Content-Type: text/html; charset=utf-8");
require_once("BaseDao.php");
require_once("Food.php");
//require_once("FileDao.php");
class FoodDao extends BaseDao{
	
	/*sendbook*/
	//first Foodimg
	public function save(Food $food){
		$sth = $this->db->prepare("insert into food(uid,imgpath,addtime) values(:uid,:imgpath,NOW())");
		$sth->bindValue(':uid', $food->getUid(), PDO::PARAM_STR);
		$sth->bindValue(':imgpath', $food->getImgpath(), PDO::PARAM_STR);
		$sth->execute();			
	}
	
	//查询最新添加的那个id
	public function findnewid(){
		$sth = $this->db->prepare("select max(id) from food");
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}

	//提交整个页面
	public function upadtefood($menu,$title,$content,$difficulty_level,$make_time,$flavor,$Reminder,$id){
		$sth = $this->db->prepare("update food set menu=:menu,title=:title,content=:content,difficulty_level=:difficulty_level,make_time=:make_time,flavor=:flavor,Reminder=:Reminder where id=:id");
		$sth->bindValue(':menu', $menu, PDO::PARAM_STR);
		$sth->bindValue(':title', $title, PDO::PARAM_STR);
		$sth->bindValue(':content', $content, PDO::PARAM_STR);
		$sth->bindValue(':difficulty_level', $difficulty_level, PDO::PARAM_STR);
		$sth->bindValue(':make_time', $make_time, PDO::PARAM_STR);
		$sth->bindValue(':flavor', $flavor, PDO::PARAM_STR);
		$sth->bindValue(':Reminder', $Reminder, PDO::PARAM_STR);
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();			
	}
	

	/*index*/
	//首页的流行与排行
	public function lxph(){
		$sth=$this->db->prepare("select * from food order by addtime desc");
		$sth->execute();
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$food = new Food($row['id'], $row['uid'], $row['menu'], $row['title'],$row['content'], $row['filename'], $row['imgpath'], $row['difficulty_level'],$row['make_time'], $row['flavor'],$row['Reminder'], $row['addtime']);
			$array[]=$food;
		}
		return $array;
	}

	//ajax异步查询流行排行中的数据
	public function sreachFood($data){
		$sth=$this->db->prepare("select * from food where concat(menu,title,content,Reminder) like '%".$data."%'");
		$sth->execute();
		//print_r($sth->errorInfo());
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$afood = new Food($row['id'], $row['uid'], $row['menu'], $row['title'],$row['content'], $row['filename'], $row['imgpath'], $row['difficulty_level'],$row['make_time'], $row['flavor'],$row['Reminder'], $row['addtime']);
			$array[]=$afood;
		}
		return $array;
	}


	/*detailpage*/
	//详情页
	public function findDetail($id){
		$sth=$this->db->prepare("select * from food where id=:id");
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		
		$row = $sth->fetch(PDO::FETCH_ASSOC);
			switch ($row['difficulty_level'])//难易程度
			{
			case 0:
  				$row['difficulty_level']="简单";
  				break;  
			case 1:
  				$row['difficulty_level']="普通";
  				break;
  			case 2:
  				$row['difficulty_level']="困难";
  				break;
  			}
  			switch ($row['make_time'])//时间
			{
			case 0:
  				$row['make_time']="1~5分钟";
  				break;  
			case 1:
  				$row['make_time']="5~15分钟";
  				break;
  			case 2:
  				$row['make_time']="15~30分钟";
  				break;
  			}
  			switch ($row['flavor'])//口味
			{
			case 0:
  				$row['flavor']="甜";
  				break;  
			case 1:
  				$row['flavor']="咸";
  				break;
  			case 2:
  				$row['flavor']="辣";
  				break;
  			}
			$food = new Food($row['id'], $row['uid'], $row['menu'], $row['title'],$row['content'], $row['filename'], $row['imgpath'], $row['difficulty_level'],$row['make_time'], $row['flavor'], $row['Reminder'], $row['addtime']);
		return $food;
		
	}


	/*myself*/
	//查询总共发了多少条食物
	public function findfoodbyid($uid){
		$sth = $this->db->prepare("select count(id) from food where uid=:uid");
		$sth->bindValue(':uid', $uid, PDO::PARAM_INT);
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}
	//查询总共发了多少条话题
	public function findsendbyid($uid){
		$sth = $this->db->prepare("select count(id) from friend where uid=:uid");
		$sth->bindValue(':uid', $uid, PDO::PARAM_INT);
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}
	
}

//$dao=new FoodDao();
//$dao->findnewid();
//print_r($dao->savee("abc.ppp"));
//print_r($dao->upadtefood("11","11","11","11","11","11","1111",229));
//$dao->sreachFood("1");
?>