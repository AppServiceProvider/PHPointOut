<?php 


$ch =curl_init('http://localhost:3000/curl/hellow.php');

curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, 'secret=noodles');
curl_exec($ch);  // http request data print