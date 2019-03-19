<!DOCTYPE html>
<html>
<head>
<?php 
	include('database/database.php');
?>
	<title> </title>
</head>
<body>
<p>Login Form</p>
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

	</table>
	<button type="submit" name="submit">Login</button>
</form>
<?php  
//http:localhost:80/c1808i-05-de1/login.php
global $connection;
if(isset($_POST["submit"])) {
	// echo "<h1>alo</h1>";
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	//prevent "sql injection"
	$userName = mysqli_escape_string($connection, $userName);
	$sql = "SELECT * FROM abc12users WHERE USERNAME='".$userName."'";
	$result = mysqli_query($connection, $sql);
	$encrypted_password = sha1($password);
	if(mysqli_num_rows($result) > 0) {
		while($row = mysqli_fetch_assoc($result)) {
			if($row["PASSWORD_HASH"] === $encrypted_password) {
				echo "<h3>Login successfully</h3>";
			} else {
				echo "<h3>Login failed.Check your name and password</h3>";
			}
		}
	} else {
		echo "<h3>User does not exist</h3>";
	}
}
?>
</body>
</html>
