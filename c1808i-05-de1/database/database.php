<?php 
include "constants.php";
$connection = mysqli_connect(hostname, db_user, db_password, db_name, port);
if($connection) {
	// echo "<h1>connect DB successfully</h1>";
} else {
	echo "<h1>connect DB FAILED</h1>";
}
?>

