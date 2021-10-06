<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$at_title = $_POST['at_title'];
$at_folder = $_POST['at_folder'];
$at_weight = $_POST['at_weight'];
$at_target = $_POST['at_target'];
$at_timestamp = $_POST['at_timestamp'];

$db->insert("ads",[
"at_title"=>$at_title,
"at_folder"=>$at_folder,
"statview"=>0,
"at_weight"=>$at_weight,
"at_target"=>$at_target,
"at_timestamp"=>$at_timestamp,
"status"=>0
]);
echo "finish";
