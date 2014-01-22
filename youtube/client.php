<?php 
error_reporting(E_ALL);
ini_set("max_execution_time", 3600000);

$address = '36 Technology Drive West, Suite 250, Irvine, CA 92618';
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, "http://www.monarchypro.com/curl/services.php");

curl_setopt($ch, CURLOPT_POSTFIELDS, "mapaddress=".$address);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);

//return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// $output contains the output string
$output = curl_exec($ch);

// close curl resource to free up system resources
curl_close($ch);  

if($output == false) echo 'No';
else echo $output;