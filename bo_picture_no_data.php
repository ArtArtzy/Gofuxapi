<?php
require_once('connection.php');
$result = $db->count("picture");
echo $result;
?>