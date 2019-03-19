<?php 
define("hostname", "localhost");
define("db_user", "root");
define("db_password", "");
define("port", "3306");
define("db_name", "abc12");
$connection = mysqli_connect(hostname, db_user, db_password, db_name);
if($connection) {
	// echo "<h1>connect DB successfully</h1>";
} else {
	echo "<h1>connect DB FAILED</h1>";
}
?>

