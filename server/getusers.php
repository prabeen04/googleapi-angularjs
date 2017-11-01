<?php

$db = mysqli_connect('localhost','root','','ci_db2');
$data = array();
$query = "select * from users";

$row = mysqli_query($db, $query);

while($rows = $row->fetch_assoc()){

	$data[] = $rows;
}

echo json_encode($data);

?>