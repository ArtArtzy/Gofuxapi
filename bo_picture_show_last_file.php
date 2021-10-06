<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pt_folder = $_POST['pt_folder'];
$fileFolder = "picture" . "/" . $pt_folder;

$mydir = 'picture/'. $pt_folder; 
  
  $myfiles = array_diff(scandir($mydir), array('.', '..')); 
  rsort($myfiles);
$temp = explode(".",$myfiles[0]);
echo $temp[0];
?>