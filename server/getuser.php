<?php
//echo "ghgfhfgh";
require_once("connect.php");
$newcon = new Connection ;
$db = $newcon->connect();
$data = array();
$query = "select * from users";
$row = mysqli_query($db,$query);

while($res = mysqli_fetch_assoc($row)){

	$data[] = $res ;
}

echo json_encode($data);

?>