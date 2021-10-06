<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pm_id = $_POST['pm_id'];
$pm_order = $_POST['pm_order'];
$pm_title = $_POST['pm_title'];
$timestamp = $_POST['timestamp'];

$db->update("picturemode",[
"pm_order"=>$pm_order,
"pm_title"=>$pm_title,
"timestamp"=>$timestamp
], ["pm_id"=>$pm_id]);
echo "finish";
