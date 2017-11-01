<?php
$db = mysqli_connect('localhost','root','','ci_db2');

$data = json_decode(file_get_contents('php://input'));
$id = $data->id ;
$query = "DELETE from users where id='$id'";

 $row = mysqli_query($db,$query);
 echo "user deleted." ; 

?>

