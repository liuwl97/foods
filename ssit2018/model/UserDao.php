<?php
header("Content-Type: text/html;charset=utf-8");
require_once("BaseDao.php");
require_once("User.php");
//require_once("FileDao.php");
class UserDao extends BaseDao{
	
	
	//登录-根据帐号密码来查询
	public function finByUsername($username){
		$sth=$this->db->prepare("select * from user where username=:username");
		$sth->bindValue(':username',$username,PDO::PARAM_STR);
		$sth->execute();	
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$user = new User($row['uid'], $row['username'], $row['password'], $row['user_img'], $row['email'], $row['tel'],$row['datetime']);
		return $user;
	}
	
	//注册
	public function register($username,$password){
		$sth = $this->db->prepare("insert into user(username,password,datetime) values (:username,:password,NOW())");
		$sth->bindValue(':username',$username,PDO::PARAM_STR);
		$sth->bindValue(':password',$password,PDO::PARAM_STR);
		$sth->execute();
	}

	//登录-根据帐号密码来查询
	public function finNewRegister(){
		$sth=$this->db->prepare("select * from user order by datetime desc limit 0,1");
		$sth->execute();	
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$user = new User($row['uid'], $row['username'], $row['password'], $row['user_img'], $row['email'], $row['tel'],$row['datetime']);
		return $user;
	}

	//查询用户头像myself
	public function finByUserimg($uid){
		$sth=$this->db->prepare("select * from user where uid=:uid");
		$sth->bindValue(':uid',$uid,PDO::PARAM_STR);
		$sth->execute();	
		$row = $sth->fetch(PDO::FETCH_ASSOC);
		$user = new User($row['uid'], $row['username'], $row['password'], $row['user_img'], $row['email'], $row['tel'],$row['datetime']);
		return $user;
	}


	//修改用户头像myself
	public function updateUserimg(User $user,$sid){
		$sth = $this->db->prepare("update user set user_img=:user_img where uid=:sid");
		$sth->bindValue(':user_img', $user->getUser_img(), PDO::PARAM_STR);
		$sth->bindValue(':sid', $sid, PDO::PARAM_INT);
		$sth->execute();
	}



	//查询所有的用户
	public function finalluser($uid){
		$sth=$this->db->prepare("select * from user where uid=:uid");
		$sth->bindValue(':uid', $uid, PDO::PARAM_INT);
		$sth->execute();
			
		//print_r($sth->errorInfo());
		$array = array();
		while($row = $sth->fetch(PDO::FETCH_ASSOC)){
			$users = new User($row['uid'], $row['username'], $row['password'], $row['user_img'], $row['email'], $row['tel'], $row['datetime']);
			$array[]=$users;
			
		}
		return $array;
	}
	
	
	
}
//$dao=new UserDao();
//print_r($dao->finalluser('1'));

?>