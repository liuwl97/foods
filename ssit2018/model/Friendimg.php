<?php

class Friendimg
{

    private $id;

    private $friendid;

    private $uid;

    private $imgpath;


    public function __construct($id,$friendid, $uid, $imgpath){
		$this->id = $id;
        $this->friendid = $friendid;
		$this->uid = $uid;
		$this->imgpath = $imgpath;
	}
	
	
	
    public function getId()
    {
        return $this->uid;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getFriendid()
    {
        return $this->friendid;
    }
    public function setFriendid($friendid)
    {
        $this->friendid = $friendidfriendid;
    }

    public function getUid()
    {
        return $this->uid;
    }
    public function setUid($uid )
    {
        $this->uid = $uid;
    }

    public function getImgpath()
    {
        return $this->imgpath;
    }
    public function setImgpath($imgpath)
    {
        $this->imgpath = $imgpath;
    }

    
    

    

}

?>