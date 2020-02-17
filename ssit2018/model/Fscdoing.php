<?php

class Fscdoing
{

    private $id;

    private $f_id;

    private $ingredientname;

    private $ingredientamount;

    private $practiceimg;

    private $practicemes;


    public function __construct($id,$f_id, $ingredientname, $ingredientamount, $practiceimg,$practicemes){
		$this->id = $id;
        $this->f_id = $f_id;
		$this->ingredientname = $ingredientname;
		$this->ingredientamount = $ingredientamount;
		$this->practiceimg = $practiceimg;
        $this->practicemes = $practicemes;
	}
	
	
	
    public function getId()
    {
        return $this->uid;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getF_id()
    {
        return $this->f_id;
    }
    public function setF_id($f_id)
    {
        $this->f_id = $f_id;
    }

    public function getIngredientname()
    {
        return $this->ingredientname;
    }
    public function setIngredientname($ingredientname )
    {
        $this->ingredientname = $ingredientname;
    }

    public function getIngredientamount()
    {
        return $this->ingredientamount;
    }
    public function setIngredientamount($ingredientamount)
    {
        $this->ingredientamount = $ingredientamount;
    }

    public function getPracticeimg()
    {
        return $this->practiceimg;
    }
    public function setpPracticeimg($practiceimg)
    {
        $this->practiceimg = $practiceimg;
    }

     public function getPracticemes()
    {
        return $this->practicemes;
    }
    public function setPracticemes($practicemes)
    {
        $this->practicemes = $practicemes;
    }

    

}

?>