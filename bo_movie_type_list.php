<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$result = $db->select("moviecat","*");
echo json_encode($result);

?>