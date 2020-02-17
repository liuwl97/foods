<?php
class FriendAfrimg
{

    private $friendid;
    private $imgpath;


    public function __construct($friendid,$imgpath){
		$this->friendid = $friendid;
        $this->imgpath = $imgpath;
	}
	
	

	
    public function getFriendid()
    {
        return $this->friendid;
    }
    public function setFriendid($friendid)
    {
        $this->friendid = $friendid;
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