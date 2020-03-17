<?php  

$myfile = fopen("name.txt", "r") or die("ATRKY HATASI!");
$old_name = fread($myfile,filesize("name.txt"));
fclose($myfile);
   
 $hek = rand(5, 15000000000000000);
   
$rand = $hek;

$leylu = md5($hek);
$yeni =  $leylu.$hek.".swf"; 
   
 
$new_name =  $leylu.$hek.".swf" ;  
   
 
if(file_exists($new_name)) 
 {  
   echo "HATA $new_name <br> $old_name" ; 
 } 
else
 { 
   if(rename( $old_name, $new_name)) 
     {  
        //echo "BAŞARILI $old_name > $new_name" ; 
     } 
     else
     { 
       // echo "AYNI DOSYA MEVCUT" ; 
     } 
  } 
 
$myfilex = fopen("name.txt", "w") or die("FTP HATASI!");
$txt = "$yeni";
fwrite($myfilex, $txt);   
 
?> 