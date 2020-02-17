<?php
class FriendcomAuser
{

    private $id;

    private $uid;

    private $friendid;

    private $comment;

    private $num;

    private $addtime;

    private $username;

    private $user_img;

    public function __construct($id,$uid,$friendid,$comment,$num,$addtime,$username,$user_img){
		$this->id = $id;
        $this->uid = $uid;
		$this->friendid = $friendid;
		$this->comment = $comment;
        $this->num = $num;
        $this->addtime = $addtime;
        $this->username = $username;
        $this->user_img = $user_img;
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

    public function getFriendid()
    {
        return $this->friendid;
    }
    public function setFriendid($friendid)
    {
        $this->friendid = $friendid;
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


     public function getComment()
    {
        return $this->comment;
    }
    public function setComment($comment)
    {
        $this->comment = $comment;
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