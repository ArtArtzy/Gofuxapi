<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$title = $_POST['title'];


$catId = $_POST['catId'];
$jwCode = $_POST['jwCode'];
$durationHour = $_POST['durationHour'];
$durationMin = $_POST['durationMin'];
$tag = $_POST['tag'];

$db->insert("movie",[
"title"=>$title,
"catid"=>$catId,
"jwcode"=>$jwCode,
"durationhour"=>$durationHour,
"durationmin"=>$durationMin,
"tag"=>$tag,
"posterfile"=>"1"

]);
echo "finish";

?>