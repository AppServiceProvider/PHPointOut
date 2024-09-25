<?php 
/*
http://localhost:3000/curl/hellow.php 
*/
echo "hellow world. this is curl";

if( isset($_POST["secret"]) && "noodles"==$_POST["secret"]){
    echo "post secret works ";
}