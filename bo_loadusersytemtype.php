<?php
require_once('connection.php');
$result = $db->select("usersystemtype","*");
echo json_encode($result);
?>