<?php
header("Content-Type: text/html; charset=utf-8");
require("model/FoodDao.php");
$fooddao = new FoodDao();

$search = $_POST['search'];
if($search!=""){
	$data = $fooddao->sreachFood($search);
}

//将对象转化为数组
function object_array($array) {  
    if(is_object($array)) {  
        $array = (array)$array;
     } 
     if(is_array($array)) {  
         foreach($array as $key=>$value) {  
             $array[$key] = object_array($value);  
         }  
     }  
     return $array;  
}
//var_dump($data[0]);
//var_dump($ret);

$ret = object_array($data);
//var_dump($ret);die;
echo json_encode($ret);



