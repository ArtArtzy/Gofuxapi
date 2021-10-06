<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pt_id = (int)$_POST['pt_id'];
$pt_title= $_POST['pt_title'];
$pt_folder =  $_POST['pt_folder'];
$pt_access= $_POST['pt_access'];
$pt_mode_id = $_POST['pt_mode_id'];
$pt_timestamp = $_POST['pt_timestamp'];
$db->update("picture",["pt_title"=>$pt_title, "pt_folder"=>$pt_folder, "pt_timestamp"=>$pt_timestamp,
"pt_access"=>$pt_access,"pt_mode_id"=>$pt_mode_id],
["pt_id"=>$pt_id]);
echo finish;