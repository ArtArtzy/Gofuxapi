<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pt_id = $_POST['pt_id'];
$pt_status = (int)$_POST['status'];
$db->update("picture",["status"=>$pt_status],["pt_id"=>$pt_id]);
echo "finish";
?>