<?php

define('KB', 1024);
define('MB', 1048576);
define('GB', 1073741824);
define('TB', 1099511627776);

var_dump($_FILES['arch']);

if($_FILES['arch']['type'] == "application/octet-stream" || $_FILES['arch']['type'] =="application/msword" || 
   $_FILES['arch']['type'] == "image/jpeg" ||  $_FILES['arch']['type'] == "image/gif"){

       if(($_FILES['arch']['type'] == "application/octet-stream" || $_FILES['arch']['type'] =="application/msword") && $_FILES['arch']['size'] <= 60*KB){
          
             $destino = "Uploads/".$_FILES['arch']['name'];
             move_uploaded_file($_FILES['arch']['tmp_name'],$destino);
             echo "<b>Se subio doc</b>";
       }

       if(($_FILES['arch']['type'] == "image/jpeg" || $_FILES['arch']['type'] == "image/gif") && $_FILES['arch']['size'] <= 300*KB ){

            $destino = "Uploads/".$_FILES['arch']['name'];
            move_uploaded_file($_FILES['arch']['tmp_name'],$destino);
            echo "<b>Se subio imagen</b>";
       }

   }
else{
    if($_FILES['arch']['size'] <= 500*KB){
         $destino = "Uploads/".$_FILES['arch']['name'];
         move_uploaded_file($_FILES['arch']['tmp_name'],$destino);
         echo "<b>Se subio otro archivo</b>";
    }
}



//tipos : http://php.net/manual/en/function.mime-content-type.php
// docx application/octet-stream
?>
