<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$username = $_POST['username'];
$password = $_POST['password'];
$result = $db->select("usersystem","*",['username'=>$username,'password'=>$password]);
$result2['id'] = $result[0]['userid'];
$result2['username'] = $result[0]['username'];
$result2['role'] = $result[0]['rolename'];
$result2['roleid'] = $result[0]['roleid'];
$result2['token'] = $result[0]['token'];
echo json_encode($result2);
?>