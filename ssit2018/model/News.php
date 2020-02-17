<?php
class News
{

    private $n_id;

    private $title;

    private $cont;


    public function __construct($n_id, $title, $cont){
		$this->n_id = $n_id;
		$this->title = $title;
		$this->cont = $cont;
	}
	
	
    public function getN_id()
    {
        return $this->n_id;
    }
    public function setN_id($n_id)
    {
        $this->n_id = $n_id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCont()
    {
        return $this->cont;
    }
    public function setCont($cont)
    {
        $this->cont = $cont;
    }

}

?>