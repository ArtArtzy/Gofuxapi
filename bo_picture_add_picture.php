<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pt_title = $_POST['pt_title'];
$pt_mode_id = $_POST['pt_mode_id'];
$pt_folder = $_POST['pt_folder'];
$pt_access = $_POST['pt_access'];
$timestamp = $_POST['timestamp'];

$db->insert("picture",[
"pt_title"=>$pt_title,
"pt_mode_id"=>$pt_mode_id,
"pt_folder"=>$pt_folder,
"pt_access"=>$pt_access,
"pt_timestamp"=>$timestamp
]);
echo "finish";
