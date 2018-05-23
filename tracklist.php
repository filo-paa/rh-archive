<?php
//get json from txt
$filename = "tracklist.json";
$myfile = fopen($filename, "r") or die("Unable to open file!");
$N = filesize($filename);
$myjson = fread($myfile,$N);
fclose($myfile);
echo $myjson;
?>
