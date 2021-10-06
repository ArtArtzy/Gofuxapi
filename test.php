<?php
require_once('connection.php');
$result = $db->select("usersystem","*");
print_r($result);
?>