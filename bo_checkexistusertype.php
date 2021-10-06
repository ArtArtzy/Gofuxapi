<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$roleid = $_POST['roleid'];
$result  = $db->select("usersystem","*",['roleid'=>$roleid]);
if(sizeof($result) >0){
    echo "false";
} else {
    echo "true";
}