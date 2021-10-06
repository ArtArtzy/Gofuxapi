<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pm_order = $_POST['pm_order'];
$pm_title = $_POST['pm_title'];
$timestamp = $_POST['timestamp'];
//Check title exist
$result = $db->select("picturemode","*",["pm_title"=>$pm_title]);
if(sizeof($result) > 0){
    echo "มีชื่อประเภทนี้แล้ว";
    return;
}
$db->insert("picturemode",[
"pm_order"=>$pm_order,
"pm_title"=>$pm_title,
"timestamp"=>$timestamp
]);
echo "finish";
