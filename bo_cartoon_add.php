<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$ct_title = $_POST['ct_title'];
$ct_folder = $_POST['ct_folder'];
$ct_timestamp = $_POST['ct_timestamp'];

$db->insert("cartoon",[
"ct_title"=>$ct_title,
"ct_folder"=>$ct_folder,
"ct_timestamp"=>$ct_timestamp
]);
echo "finish";


?>