<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$at_id = $_POST['at_id'];
$at_status = (int)$_POST['status'];
$db->update("ads",["status"=>$at_status],["at_id"=>$at_id]);
echo "finish";
?>