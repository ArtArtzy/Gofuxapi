<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$token = $_POST['token'];
$menu = (int)$_POST['menu'];
$result = $db->select("usersystem","*",['token'=>$token]);
if(sizeof($result) > 0){
    $roleid = (int)$result[0]['roleid'];
    $result2 = $db->select("usersystemtype","*",['id'=> $roleid]);
   if($menu ==1){
        $access = $result2[0]['actress'];
    } else if($menu ==2){
        $access = $result2[0]['movie'];
    } else if($menu ==3){
        $access = $result2[0]['cartoon'];
    } else if($menu ==4){
        $access = $result2[0]['story'];
    } else if($menu ==5){
        $access = $result2[0]['picture'];
    } else if($menu ==6){
        $access = $result2[0]['ads'];
    } else if($menu ==7){
        $access = $result2[0]['stat'];
    } else if($menu ==8){
        $access = $result2[0]['member'];
    }
    else if($menu ==9){
        $access = $result2[0]['system'];
    }
    echo $access;
} else {
    echo "false";
}

?>