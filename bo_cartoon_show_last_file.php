<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$ct_folder = $_POST['ct_folder'];
$fileFolder = "cartoon" . "/" . $ct_folder;

$mydir = 'cartoon/'. $ct_folder; 
  
  $myfiles = array_diff(scandir($mydir), array('.', '..')); 
  rsort($myfiles);
$temp = explode(".",$myfiles[0]);
echo $temp[0];
?>