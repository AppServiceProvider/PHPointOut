<?php 
/*
$ch = curl_init("https://simplenote.com"); 
curl_exec($ch);
*/

$ch = curl_init("https://simplenote.com"); //https 
// $ch = curl_init("http://jsonplaceholder.typicode.com/posts/1");

$re= curl_exec($ch);
$error= curl_error($ch);

if($error){
    echo $error;
}
// curl_exec($ch);