<?php
$myfile = fopen("name.txt", "r") or die("ATRKY HATASI!");
$old_name = fread($myfile,filesize("name.txt"));
fclose($myfile);
 

header("location: $old_name");



 ?>