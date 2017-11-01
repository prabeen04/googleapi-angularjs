<?php
//echo "ghgfhfgh";
require_once("connect.php");
$newcon = new Connection ;
$db = $newcon->connect();
$users = json_decode(file_get_contents("php://input")) ;
//print_r( $users);
$email = $users->email;
$password = md5($users->password);
//print_r( $email);
//echo $email;
//echo $password;
$data = array();
$query = "select * from users where email='".$email. "' and password='".$password."'";
$row = mysqli_query($db,$query);
$res = mysqli_fetch_assoc($row);
//print_r($res) ;
if($res>1){
	echo "true";
}else{
	echo "false";
}
/*
while($res = mysqli_fetch_assoc($row)){

	$data[] = $res ;
}

echo json_encode($data);
*/
?>