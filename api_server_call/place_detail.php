<?php
require_once ("../server/connect.php");

/*$con = new Connection ;

$db = $con->connect();*/

$data = json_decode(file_get_contents('php://input'));

$lat = $data->lat;
$lng = $data->lng;
$type = $data->type;
$url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$lat.','.$lng.'&radius=2000&type='.$type.'&key=AIzaSyCuReN5Shu_1ZRgvrxm9xSCMQqNp4Pjn7M';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$res = curl_exec($ch);
curl_close($ch);
echo $res;

?>