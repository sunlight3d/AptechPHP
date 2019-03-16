<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="GET">
	<input type="text" name="name">
	<br>
	<button type="submit" value="submit" name="submit"> Send request
	</button> 
	</form>
<?php  
//http://localhost:80/c1808i-04/example2.php
if(isset($_GET['submit'])) {
	echo "SERVER_NAME = ".$_SERVER['SERVER_NAME'];
	echo "Agent = ".$_SERVER['HTTP_USER_AGENT'];
}
 ?>

</body>
</html>
