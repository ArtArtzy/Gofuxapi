<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$id = $_POST['id'];

$db->delete("picture",["pt_id"=>$id]);
echo "finish";
