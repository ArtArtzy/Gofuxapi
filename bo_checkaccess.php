<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$roleid = $_POST['roleid'];
$result = $db->select("usersystemtype","*",["id"=>$roleid]);
echo json_encode($result);
?>