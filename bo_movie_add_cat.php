<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$orderid = $_POST['orderid'];
$catName = $_POST['catName'];
//ทำการ Check orderid /Catname ก่อนบันทึกว่ามีหรือยัง
$result = $db->select("moviecat","*",[
    "orderid"=>$orderid
]);
$result2 = $db->select("moviecat","*",[
    "catname"=>$catName
]);
if(sizeof($result) + sizeof($result2) > 0){
    echo "รหัสลำดับหรือชื่อหมวดหนังมีใช้แล้ว";
    return;
} 
$db->insert("moviecat",[
    "orderid"=>$orderid,
    "catname"=>$catName
]);
echo "finish";
?>