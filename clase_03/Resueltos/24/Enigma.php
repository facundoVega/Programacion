<?php

Class Enigma {


    public static function  Encriptar ($msg,$path){
        
        $txtEncriptado = "";

        for($i=0;$i<strlen($msg);$i++){

           $numASCII = 0;
           $numASCII = ord($msg[$i]);
           $numASCII += 200;
           $txtEncriptado.= (string) $numASCII;
           $txtEncriptado.="\n";

        }

        $file = fopen($path,'w');
        fwrite($file,$txtEncriptado);

        if(fclose($file)){
            return true;
        }

     return false;  

   }


   public static function Desencriptar ($path){

       $txtDesencriptado = "";
       $file = fopen($path,'r');
       

       while(!feof($file)){
         $txtLine="";
         $txtLine .= fgets($file);  
         $intASCII = (int)$txtLine;
         $addTxt = chr($intASCII-200);
         $txtDesencriptado .= $addTxt;
       }

     return $txtDesencriptado;
   }



}


?>