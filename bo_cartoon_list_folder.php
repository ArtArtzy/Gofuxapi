<?php
require_once('connection.php');
$dirs = array_filter(glob('cartoon/*'), 'is_dir');
$result=array_filter($dirs, 'strlen');
$result2 = [];
for($i=0;$i<sizeof($result);$i++){
    array_push($result2,str_replace("cartoon/","",$result[$i]));
}
$result3 = $db->select("cartoon","ct_folder");
for($i=0;$i<sizeof($result3);$i++){
    if (($key = array_search($result3[$i], $result2)) !== false) {
        unset($result2[$key]);
    }
}
$result2 = array_values($result2);
echo json_encode($result2);

?>