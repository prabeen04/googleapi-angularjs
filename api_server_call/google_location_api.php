<?php 
$data = json_decode(file_get_contents('php://input'));

$location = $data->location;
$location = str_replace(' ', '+', $location);
$url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$location.'&key=AIzaSyAYl3tV8A0nsXc7TVHUTEFFHPE9fBmy03s';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$res = curl_exec($ch);
curl_close($ch);
echo $res;