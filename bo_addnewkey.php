<?php
require_once('connection.php');

$_POST = json_decode(file_get_contents("php://input"),true);
$securityKey = $_POST['securityKey'];
$token = $_POST['token'];

//check tokendata and get role id
$result = $db->select("usersystem","*",["token"=>$token]);
$roleid = $result[0]['roleid'];
$result2 = $db->select("usersystemtype","system",['id'=>$roleid]);
if($result2[0]['system'] ==1 ){
    $db->delete("securitykey",[]);
    $db->insert("securitykey",["securitykey"=>$securityKey]);
echo "finish";
} else {
    echo "คุณไม่มีสิทธิเข้าถึงข้อมูล";
}

?>