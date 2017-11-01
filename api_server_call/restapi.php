<?php
require_once('../server/connect.php');
header('Content-type: application/json');
$data = json_decode(file_get_contents('php://input'));
echo "<pre>";
print_r($data);
$restaurant_name = $data->restaurant_name;
$address = $data->address;
$city = $data->city;
$country = $data->country;
$pincode = $data->pincode;
$cuisine = $data->cuisine;
$contact_no = $data->contact_no;
$website = $data->website;
$type = $data->type;
$open_hour = $data->open_hour;
$close_hour = $data->close_hour;
$img = $data->img;
echo $restaurant_name;
echo $address->street;
echo $cuisine[1];
echo $website;
/* $sql = "INSERT INTO `ci_db2`.`user` (`user_id`, `user_fullname`, `user_email`, `user_password`, `user_status`) VALUES (NULL, '$name', '$email', '$password', '$status');";
 $qur = mysqli_query($cnn, $sql);
 if($qur){
 $json = array("status" => 1, "msg" => "Done User added!");
 }else{
 $json = array("status" => 0, "msg" => "Error adding user!");
 }*/
 //$json = array("status" => 0, "msg" => "Request method not accepted");
 
//@mysqli_close($cnn);
 
/* Output header */
 //header('Content-type: application/json');
 //echo json_encode($json);
?>