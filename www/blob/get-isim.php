<?php
header("Access-Control-Allow-Origin: *");


$myfile = fopen("../name.txt", "r") or die("ATRKYHATASI!");
$old_name = fread($myfile,filesize("../name.txt"));
fclose($myfile);
 
 
echo "http://avaturkey.com/".$old_name;

 ?>