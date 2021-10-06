<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$username = $_POST['username'];
$password = $_POST['password'];
// $username = "Art";
// $password = "1234";
$result = $db->select("user","*",['username'=>$username,'password'=>$password]);
$result2['id'] = $result[0]['id'];
$result2['username'] = $result[0]['username'];
$result2['telephone'] = $result[0]['telephone'];
$result2['token'] = $result[0]['token'];
echo json_encode($result2);
?>