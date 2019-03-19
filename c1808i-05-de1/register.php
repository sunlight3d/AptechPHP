<!DOCTYPE html>
<html>
<head>
<?php 
	include('database/database.php');
?>
	<title> </title>
</head>
<body>
<p>Registration Form</p>
<form action="" method="POST">
	<table>
		<tr> 
			<td> 
				UserName
			</td>
			<td> 
				<input type="text" name="userName">
			</td>
		</tr>
		<tr> 
			<td> 
				Password
			</td>
			<td> 
				<input type="password" name="password">
			</td>
		</tr>
		<tr> 
			<td> 
				Phone Number
			</td>
			<td> 
				<input type="number" name="phone">
			</td>
		</tr>
	</table>
	<button type="submit" name="submit">Registration</button>
</form>
<?php  
//http:localhost:80/c1808i-05-de1/register.php
global $connection;
if(isset($_POST["submit"])) {
	// echo "<h1>alo</h1>";
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	//prevent "sql injection"
	$userName = mysqli_escape_string($connection, $userName);
	$sql = "SELECT * FROM abc12users WHERE USERNAME='".$userName."'";
	$result = mysqli_query($connection, $sql);
	if(mysqli_num_rows($result) > 0) {
		echo "<h1>User exists</h1>";

	} else {
		$encrypted_password = sha1($password);
		$sql = "INSERT INTO abc12users(USERNAME, PASSWORD_HASH, PHONE)
				 VALUES('$userName','$encrypted_password','$phone')";
		$result = mysqli_query($connection, $sql);
		if($result) {
			echo "<h3>Registration successful.Username: $userName, phone: $phone </h3>";
		} else {
			echo "<h3>Registration failed</h3>";
		}
	}
}
?>
</body>
</html>
