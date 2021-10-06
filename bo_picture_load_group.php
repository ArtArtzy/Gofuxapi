<?php
require_once('connection.php');
$sql = "select * from picturemode order by pm_order";
$result = $db->query($sql)->fetchAll();
echo json_encode($result);
?>