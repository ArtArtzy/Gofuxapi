<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$id = $_POST['id'];
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
$result = $db->update("usersystemtype",
[

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

]
,['id'=>$id]);
     echo "finish";

?>