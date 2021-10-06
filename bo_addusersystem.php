<?php
require_once('connection.php');
function generateRandomString($length =20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$_POST = json_decode(file_get_contents("php://input"),true);
$username = $_POST['username'];
$password = $_POST['password'];
$realname = $_POST['realname'];
$roleid = $_POST['roleid'];
$editor = $_POST['editor'];
$timestamp = $_POST['timestamp'];
$token =  generateRandomString();
$roleSet = $db->select("usersystemtype","typename",['id'=>$roleid]);
//ตรวจสอบ username ซ้ำ
$result = $db->select("usersystem","userid",['username'=>$username]);
if(sizeof($result) > 0){
    echo "มี username แล้ว";
    return;
}
$db->insert("usersystem",[
    "username"=>$username,
    "password"=>$password,
    "realname"=>$realname,
    "roleid"=>$roleid,
    "rolename"=>$roleSet[0],
    "timestamp"=>$timestamp,
    "editor"=>$editor,
    "token"=>$token
]);
echo "finish";