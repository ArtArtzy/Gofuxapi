<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$ct_id = $_POST['ct_id'];
$ct_status = (int)$_POST['status'];
$db->update("cartoon",["status"=>$ct_status],["ct_id"=>$ct_id]);
echo "finish";
?>