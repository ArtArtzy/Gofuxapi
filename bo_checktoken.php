<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$token = $_POST['token'];
$result = $db->select("usersystem","*",['token'=>$token]);
$result2['userid'] = $result[0]['userid'];
$result2['username'] = $result[0]['username'];
$result2['realname'] = $result[0]['realname'];
$result2['roleid'] = $result[0]['roleid'];
$result3 = $db->select("usersystemtype","*",['id'=>$result2['roleid']]);
$result2['frontpanel'] = $result3[0]['frontpanel'];
$result2['actress'] = $result3[0]['actress'];
$result2['movie'] = $result3[0]['movie'];
$result2['cartoon'] = $result3[0]['cartoon'];
$result2['story'] = $result3[0]['story'];
$result2['picture'] = $result3[0]['picture'];
$result2['ads'] = $result3[0]['ads'];
$result2['stat'] = $result3[0]['stat'];
$result2['member'] = $result3[0]['member'];
$result2['system'] = $result3[0]['system'];
echo json_encode($result2);
?>