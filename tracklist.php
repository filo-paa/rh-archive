<?php
//get json from txt
$filename = "data/tracklist.json";
$myfile = fopen($filename, "r") or header("Location: 404.php");
$N = filesize($filename);
$myjson = fread($myfile,$N);
fclose($myfile);
echo $myjson;
?>
