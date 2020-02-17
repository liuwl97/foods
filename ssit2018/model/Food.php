<?php
header("Content-Type: text/html; charset=utf-8");
class Food
{

    private $id;

    private $uid;

    private $menu;

    private $title;

    private $content;

    private $filename;

    private $imgpath;

    private $difficulty_level;

    private $make_time;

    private $flavor;

    private $Reminder;

    private $addtime;

    public function __construct($id,$uid, $menu, $title, $content,$filename,$imgpath,$difficulty_level,$make_time,$flavor,$Reminder,$addtime){
		$this->id = $id;
        $this->uid = $uid;
		$this->menu = $menu;
		$this->title = $title;
		$this->content = $content;
        $this->filename = $filename;
        $this->imgpath = $imgpath;
        $this->difficulty_level = $difficulty_level;
        $this->make_time = $make_time;
        $this->flavor = $flavor;
        $this->Reminder = $Reminder;
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

    public function getMenu()
    {
        return $this->menu;
    }
    public function setMenu($menu )
    {
        $this->menu = $menu;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }

     public function getFilename()
    {
        return $this->filename;
    }
    public function setFilename($filename)
    {
        $this->filename = $filename;
    }

     public function getImgpath()
    {
        return $this->imgpath;
    }
    public function setImgpath($imgpath)
    {
        $this->imgpath = $imgpath;
    }

     public function getDifficulty_level()
    {
        return $this->difficulty_level;
    }
    public function setDifficulty_level($difficulty_level)
    {
        $this->difficulty_level = $difficulty_level;
    }

     public function getMake_time()
    {
        return $this->make_time;
    }
    public function setMake_time($make_time)
    {
        $this->make_time = $make_time;
    }

     public function getFlavor()
    {
        return $this->flavor;
    }
    public function setFlavor($flavor)
    {
        $this->flavor = $flavor;
    }

     public function getReminder()
    {
        return $this->Reminder;
    }
    public function setReminder($Reminder)
    {
        $this->Reminder = $Reminder;
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