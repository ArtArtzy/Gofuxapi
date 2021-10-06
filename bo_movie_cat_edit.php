<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$id = $_POST['id'];
$orderid = $_POST['orderid'];
$catname = $_POST['catName'];
$db->update("moviecat",[
    "orderid"=>$orderid,
    "catname"=>$catname
],[
    "mc_id"=>$id
])
?>