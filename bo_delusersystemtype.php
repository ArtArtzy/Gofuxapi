<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$id = (int)$_POST['id'];
$db->delete("usersystemtype",["id"=>$id]);
echo "finish";