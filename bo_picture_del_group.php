<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$pm_id = $_POST['id'];
//Check ว่ามีวาร์ปในประเภทนี้หรือเปล่าว
$countDB = $db->count("picture",["pt_mode_id"=>$pm_id]);
if($countDB > 0){
    echo "ไม่สามารถลบได้มีวาร์ปอยู่ในประเภทนี้";
} else {
    $db->delete("picturemode",["pm_id"=>$pm_id]);
    echo "finish";
}
