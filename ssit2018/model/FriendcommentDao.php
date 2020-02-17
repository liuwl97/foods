<?php
header("Content-Type: text/html;charset=utf-8");
require_once("BaseDao.php");
require_once("Friendcomment.php");

class FriendcommentDao extends BaseDao{

	//friend.php-点赞
	public function addzhanByid($id){
		$sth=$this->db->prepare("update friendcomment set num=num+1 where id=:id");
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}
	
	//friend.php-查询赞的总数
	public function countzan($id){
		$sth = $this->db->prepare("select num from friendcomment where id=:id");
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}

	//发送评论
	public function sendcomm($uid,$friendid,$comment){
		$sth = $this->db->prepare("insert into friendcomment (uid,friendid,comment,addtime) values (:uid,:friendid,:comment,NOW())");
		$sth->bindValue(':uid', $uid, PDO::PARAM_INT);
		$sth->bindValue(':friendid', $friendid, PDO::PARAM_STR);
		$sth->bindValue(':comment', $comment, PDO::PARAM_STR);
		$sth->execute();
	}


	

}

//$dao=new FriendDao();
//$dao->addzhanByid('86');

?>