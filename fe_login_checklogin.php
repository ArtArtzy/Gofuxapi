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

//


$result=$db->count("user",[
    "username"=>$username,
    "password"=>$password
]);
if($result==0){
    echo "password incorrect";
}
else{
    $token=generateRandomString();
    $db->update("user",[
        "token"=>$token
    ],[
        "username"=>$username,
        "password"=>$password
    ]);
    $result2=$db->select("user","*",[
        "username"=>$username
    ]);
    
    echo json_encode($result2, JSON_UNESCAPED_UNICODE);
}
?>