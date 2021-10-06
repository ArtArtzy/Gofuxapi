<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$userid = $_POST['userid'];
$realname = $_POST['realname'];
$username = $_POST['username'];
$password = $_POST['password'];
$roleid = (int)$_POST['roleid'];
$editor = $_POST['editor'];
$timestamp = $_POST['timestamp'];
$result = $db->select("usersystemtype",["typename"],["id"=>$roleid]);
$db->update("usersystem",[
    "username"=>$username,
    "password"=>$password,
    "realname"=>$realname,
    "roleid"=>$roleid,
    "rolename"=>$result[0]['typename'],
    "timestamp"=>$timestamp,
    "editor"=>$editor
],["userid"=>$userid]);
echo "finish";
?>