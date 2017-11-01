<?php
//echo 'Success... ';
class Connection {

public function connect(){

	$con = new mysqli('localhost','root','root','ci_db2') ;
		//echo 'Success... ' . $con->host_info . "\n";
	return $con;

}


}
$cn = new connection;
$cnn = $cn->connect();
?>