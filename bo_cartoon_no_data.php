<?php
require_once('connection.php');
$result = $db->count("cartoon");
echo $result;
?>