<?php
class Friend
{

    private $id;

    private $uid;

    private $title;

    private $num;

    private $addtime;

    /*newadd*/
    private $userall=array();

    public function __construct($id,$uid,$title,$num,$addtime){
		$this->id = $id;
        $this->uid = $uid;
		$this->title = $title;
		$this->num = $num;
        $this->addtime = $addtime;
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

}

?>