<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
function generateRandomString($length = 20) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$username=$_POST['username'];
$password=$_POST['password'];
$telephone=$_POST['phonenumber'];
$token=generateRandomString();
$currenttime=time();

$telephone=substr_replace($telephone,substr($telephone,4),3);
$telephone=substr_replace($telephone,substr($telephone,7),6);

$result=$db->count("user",[
    "telephone"=>$telephone
]);
if($result!=0){
    echo "this phonenumber exist";
    return;
}
$result2=$db->count("user",[
    "username"=>$username
]);
if($result2!=0){
    echo "this username exist";
    return;
}
$db->insert("user",[
    "username"=>$username,
    "password"=>$password,
    "telephone"=>$telephone,
    "status"=>1,
    "timestamp"=>$currenttime,
    "token"=>$token
]);
$result3=$db->select("user","*",[
    "username"=>$username
]);

echo json_encode($result3, JSON_UNESCAPED_UNICODE);
?>