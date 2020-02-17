<?php
header("Content-Type: text/html;charset=utf-8");
require_once("BaseDao.php");
require_once("Friend.php");
require_once("FriendAuser.php");
require_once("FriendAfrimg.php");
require_once("FriendcomAuser.php");
require_once("Friendimg.php");
class FriendDao extends BaseDao{

	/*friend*/
	//friend.php-mes
	public function findallfriend(){
		$sth=$this->db->prepare("SELECT user.username,user.user_img,friend.* FROM user INNER JOIN friend ON user.uid=friend.uid order by addtime desc");
		$sth->execute();
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$friendauser = new FriendAuser($row['id'], $row['uid'],$row['title'] ,$row['num'] ,$row['addtime'],$row['username'],$row['user_img']);
			$array[]=$friendauser;
		}
		return $array;
	}

	//friend.php-img
	public function findalllmg(){
		$sth=$this->db->prepare("SELECT friendimg.friendid,friendimg.imgpath FROM friend INNER JOIN friendimg ON friend.id=friendimg.friendid");
		$sth->execute();
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$friendafrimg = new FriendAfrimg($row['friendid'], $row['imgpath']);
			$array[]=$friendafrimg;
		}
		return $array;
	}
	

	//friend.php-点赞
	public function addzhanByid($id){
		$sth=$this->db->prepare("update friend set num=num+1 where id=:id");
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
	}
	
	//friend.php-查询赞的总数
	public function countzan($id){
		$sth = $this->db->prepare("select num from friend where id=:id");
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}


	/*friend_comment.php*/
	//查询具体某个用户
	public function findByidfriend($id){
		$sth=$this->db->prepare("SELECT user.username,user.user_img,friend.* FROM user INNER JOIN friend ON user.uid=friend.uid where id=$id");
		$sth->bindValue(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		
		$frienduser = new FriendAuser($row['id'], $row['uid'],$row['title'] ,$row['num'] ,$row['addtime'],$row['username'],$row['user_img']);
		return $frienduser;
	}

	//查询具体某个用户发表的图片
	public function findbyidlmg($friendid){
		$sth=$this->db->prepare("SELECT friendimg.friendid,friendimg.imgpath FROM friend INNER JOIN friendimg ON friend.id=friendimg.friendid where friendid=:friendid");
		$sth->bindValue(':friendid', $friendid, PDO::PARAM_INT);
		$sth->execute();
		
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$friendafrimg = new FriendAfrimg($row['friendid'], $row['imgpath']);
			$array[]=$friendafrimg;
		}
		return $array;
	}


	//查询总共有多少条评论
	public function countcomm($friendid){
		$sth = $this->db->prepare("select count(id) from friendcomment where friendid=:friendid");
		$sth->bindValue(':friendid', $friendid, PDO::PARAM_INT);
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}

	//查询评论当前comm的用户
	public function findbyidmes($friendid){
		$sth=$this->db->prepare("SELECT user.username,user.user_img,friendcomment.* FROM user INNER JOIN friendcomment ON user.uid=friendcomment.uid where friendid=:friendid order by addtime desc");
		$sth->bindValue(':friendid', $friendid, PDO::PARAM_INT);
		$sth->execute();
		
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$friendcomauser = new FriendcomAuser($row['id'], $row['uid'], $row['friendid'], $row['comment'], $row['num'],  substr($row['addtime'],5,20), $row['username'], $row['user_img']);
			$array[]=$friendcomauser;
		}
		return $array;
	}


	//新增话题到friend表中
	public function sendfriend($uid,$title){
		$sth=$this->db->prepare("insert into friend (uid,title,addtime) values (:uid,:title,NOW())");
		$sth->bindValue(':uid', $uid, PDO::PARAM_INT);
		$sth->bindValue(':title', $title, PDO::PARAM_STR);
		$sth->execute();
	}
	//查询刚刚增话题到friend表中的id
	public function findnewfriendId(){
		$sth=$this->db->prepare("select max(id) from friend");
		$sth->execute();
		$row = $sth->fetch();
		$numCount = $row[0];
		return $numCount;
	}

}

//$dao=new FriendDao();
//$dao->addzhanByid('86');

?>