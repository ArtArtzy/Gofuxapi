<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$diffWeek = $_POST['diffWeek'];
$result = $db->select("picture","*");

for($i=0;$i<sizeof($result);$i++){
    $ct_id =  $result[$i]['pt_id'];
   $result2 = $db->select("picturestat","*",["weekno"=>$diffWeek,"pt_id"=>$ct_id]);
   if(sizeof($result2)> 0){
        $result[$i]['statweek'] = $result2[0]['view'];
   } else {
       $result[$i]['statweek']= 0;
   }
   $result3 = $db->select("picturemode","*",["pm_id"=>$result[$i]['pt_mode_id']]);
   $result[$i]['typePic'] = $result3[0]['pm_title'];
}


echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>