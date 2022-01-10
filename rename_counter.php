<?php
for($j=10;$j<=12;$j++){
$files = glob('picture/p0'. $j . '/*');
$counter = 0; 
foreach($files as $file) {
    echo "filename:".$file."<br />";
    $pathname = substr($file,0,-6);
    // echo $pathname;
    if($counter < 10){
        $fullpath = $pathname . "000" . $counter . ".jpg";
    } else {
        $fullpath = $pathname . "00" . $counter . ".jpg";
    }
    $counter++;
    echo $fullpath;
    echo "<br>";
    rename($file, $fullpath);
}
}
?>