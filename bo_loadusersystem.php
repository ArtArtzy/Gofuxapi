<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$token = $_POST['token'];
$result = $db->select("usersystem","*",['token'=>$token]);
$roleid = $result[0]['roleid'];
$resultx= $db->select("usersystemtype","system",['id'=>$roleid]);
if($resultx[0]['system'] !=0){

    $result2 = $db->select("usersystem",[
        "[><]usersystemtype"=>["roleid"=>"id"]
    ],"*");
    echo json_encode($result2);
    
} else {
    echo "ไม่มีสิทธิเข้าถึงข้อมูล";
}


?>