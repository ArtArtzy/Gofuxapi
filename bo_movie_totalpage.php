<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$catId = $_POST['catId'];

$sql = "select count(id) as c1 from movie where catid=" . $catId;
$result = $db->query($sql)->fetchAll();
echo $result[0]['c1'];
?>