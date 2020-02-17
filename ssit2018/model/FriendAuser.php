<?php
class FriendAuser
{

    private $id;

    private $uid;

    private $title;

    private $num;

    private $addtime;

    private $username;

    private $user_img;

    /*newadd*/
    private $userall=array();

    public function __construct($id,$uid,$title,$num,$addtime,$username,$user_img){
		$this->id = $id;
        $this->uid = $uid;
		$this->title = $title;
		$this->num = $num;
        $this->addtime = $addtime;
        $this->username = $username;
        $this->user_img = $user_img;
	}
	
	 public function getUserall()
    {
        return $this->userall;
    }
    public function setUserall($userall)
    {
        $this->userall = $userall;
    }

	
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUid()
    {
        return $this->uid;
    }
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getNum()
    {
        return $this->num;
    }
    public function setNum($num)
    {
        $this->num = $num;
    }

     public function getAddtime()
    {
        return $this->addtime;
    }
    public function setAddtime($addtime)
    {
        $this->addtime = $addtime;
    }


     public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUser_img()
    {
        return $this->user_img;
    }
    public function setUser_img($user_img)
    {
        $this->user_img = $user_img;
    }
}

?>