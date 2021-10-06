<?php
require_once('connection.php');
$_POST = json_decode(file_get_contents("php://input"),true);
$diffWeek = $_POST['diffWeek'];
$result = $db->select("cartoon","*");
for($i=0;$i<sizeof($result);$i++){
    $ct_id =  $result[$i]['ct_id'];
   $result2 = $db->select("cartoonstat","*",["weekno"=>$diffWeek,"ct_id"=>$ct_id]);
   if(sizeof($result2)> 0){
        $result[$i]['statweek'] = $result2[0]['view'];
   } else {
       $result[$i]['statweek']= 0;
   }
}
echo json_encode($result);
?>