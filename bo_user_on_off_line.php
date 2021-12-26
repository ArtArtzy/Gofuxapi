<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);

$onOff = $_POST['onOff'];
$id = $_POST['id'];

$db->update("user",[
    "status"=>$onOff
], [
    "id"=>$id
])
?>