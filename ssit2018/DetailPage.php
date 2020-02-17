<?php
require("libs/Smarty.class.php");
require("model/FoodDao.php");
require("model/FscdoingDao.php");

$smarty=new Smarty();
$fooddao = new FoodDao();
$fscdoingdao = new FscdoingDao();

$id = $_GET['id'];
$fooddetail = $fooddao->findDetail($id);
$fooddetail_ming = $fscdoingdao->findDetailming($id);

$smarty->assign("fooddetail", $fooddetail);
$smarty->assign("fooddetail_ming", $fooddetail_ming);
$smarty->display("template/DetailPage.html");
?>