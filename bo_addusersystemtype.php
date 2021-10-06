<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$typename = $_POST['typename'];
$actress = $_POST['actress'];
$movie = $_POST['movie'];
$cartoon = $_POST['cartoon'];
$story = $_POST['story'];
$picture = $_POST['picture'];
$ads = $_POST['ads'];
$stat = $_POST['stat'];
$member = $_POST['member'];
$system = $_POST['system'];
$editor = $_POST['editor'];
$timestamp = $_POST['timestamp'];

// check duplicated typename
$result = $db->select("usersystemtype","*",['typename'=>$typename]);
if(sizeof($result) != 0) {
    echo "มีชื่อประเภทซ้ำ";
 } else {
     $db->insert("usersystemtype",[
        "typename"=>$typename,
        "actress"=>$actress,
        "movie"=>$movie,
        "cartoon"=>$cartoon,
        "story"=>$story,
        "picture"=>$picture,
        "ads"=>$ads,
        "stat"=>$stat,
        "member"=>$member,
        "system"=>$system,
        "editor"=>$editor,
        "timestamp"=>$timestamp
     ]);
     echo "finish";
 }
?>