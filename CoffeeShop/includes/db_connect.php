<?php
//database connection
$conn=mysqli_connect('localhost','root','','coffee');
if(!$conn) {
	echo "connection failed:" .mysqli_connection_error($conn);
	die();
}
?>