<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$catid = $_POST['catId'];
$page = $_POST['page'];
$pageStart = (($page-1)*8)+1;
$sql = "select * from movie where catid=" . $catid . " limit 8 offset " . $pageStart;
$result = $db->query($sql)->fetchAll();
echo json_encode($result);


?>