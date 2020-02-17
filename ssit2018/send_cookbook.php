<?php
session_start();
require("libs/Smarty.class.php");
$smarty=new Smarty();

$smarty->assign('sessuid',$_SESSION['sessuid']);

$smarty->display("template/send_cookbook.html");
?>