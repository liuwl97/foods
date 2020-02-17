<?php

class User
{

    private $uid;

    private $username;

    private $password;

    private $user_img;

    private $email;

    private $tel;

    private $datetime;

    public function __construct($uid, $username, $password, $user_img,$email,$tel,$datetime){
		$this->uid = $uid;
		$this->username = $username;
		$this->password = $password;
		$this->user_img = $user_img;
        $this->email = $email;
        $this->tel = $tel;
        $this->datetime = $datetime;
	}
	
	
	
    public function getUid()
    {
        return $this->uid;
    }
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getUser_img()
    {
        return $this->user_img;
    }
    public function setUser_img($user_img)
    {
        $this->user_img = $user_img;
    }

     public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

     public function getTel()
    {
        return $this->tel;
    }
    public function setTel($tel)
    {
        $this->tel = $tel;
    }

     public function getDatetime()
    {
        return $this->datetime;
    }
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }
}

?>