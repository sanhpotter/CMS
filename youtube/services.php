<?php 
error_reporting(0);

$address = isset($_POST['addr']) ? trim($_POST['addr']) : '';

echo GetLatLongFromAddress($address);

function GetLatLongFromAddress($playlistFeedURL){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $playlistFeedURL);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

?>