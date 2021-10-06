<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$at_id = (int)$_POST['at_id'];
$at_title= $_POST['at_title'];
$at_folder =  $_POST['at_folder'];
$at_weight = $_POST['at_weight'];
$at_target= $_POST['at_target'];
$pt_timestamp = $_POST['pt_timestamp'];
$db->update("picture",["pt_title"=>$pt_title, "pt_folder"=>$pt_folder, "pt_timestamp"=>$pt_timestamp,
"pt_access"=>$pt_access,"pt_mode_id"=>$pt_mode_id],
["pt_id"=>$pt_id]);
echo finish;