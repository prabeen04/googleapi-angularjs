<?php
require_once ("connect.php");

$con = new Connection ;

$db = $con->connect();

$data = json_decode(file_get_contents('php://input'));

if(count($data)>0){

	$username = mysqli_real_escape_string($db, $data->username);
	$email = mysqli_real_escape_string($db, $data->email);
	$password = md5(mysqli_real_escape_string($db, $data->password));

	$query = "insert into users (username,email,password) values ('$username','$email','$password')";

	if(mysqli_query($db,$query))
	{

		echo "Registration Successfull";

	}else{

		echo "error occoured" ; 

	}


}

?>