<?php 
/*
http://localhost:3000/curl/hellow.php 
*/
echo "hellow world. this is curl \n";

if( isset($_POST["secret"]) && "noodles" == $_POST["secret"]){ //if post is secret and value is noodles
    echo "post secret works \n";
}