<?php
class Friendcomment
{

    private $id;

    private $uid;

    private $friendid;

    private $comment;

    private $num;

    private $ddtime;

    public function __construct($id,$uid,$friendid,$comment,$num,$addtime){
		$this->id = $id;
        $this->uid = $uid;
		$this->friendid = $friendid;
        $this->comment = $comment;
		$this->num = $num;
        $this->addtime = $addtime;
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
        return $this->addtime;
    }
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
}

?>