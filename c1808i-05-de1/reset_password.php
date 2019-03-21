<!DOCTYPE html>
<html>
<head>
<?php 
	include('database/database.php');
?>
	<title> </title>
</head>
<body>
<p>Reset phoneNumber form</p>
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
				Phone Number
			</td>
			<td> 
				<input type="number" name="phoneNumber">
			</td>
		</tr>

	</table>
	<button type="submit" name="submit">Reset</button>
</form>
<?php  
//http:localhost:80/c1808i-05-de1/reset_password.php
global $connection;
if(isset($_POST["submit"])) {
	// echo "<h1>alo</h1>";
	$userName = $_POST['userName'];
	$phoneNumber = $_POST['phoneNumber'];
	//prevent "sql injection"
	$userName = mysqli_escape_string($connection, $userName);
	$sql = "SELECT * FROM abc12users WHERE USERNAME='$userName' AND PHONE='$phoneNumber'";
	$result = mysqli_query($connection, $sql);
	$encrypted_phoneNumber = sha1($phoneNumber);
	if(mysqli_num_rows($result) > 0) {
		//Enter correct phone and username
		//Generate a password 
		// $generated_password = uniqid('', true);//auto-generated string
		$generated_password = str_shuffle("123a");
		$encrypted_password = sha1($generated_password);
		$sql = "UPDATE abc12users SET PASSWORD_HASH='$encrypted_password' WHERE"." ".
				"USERNAME='$userName' AND PHONE='$phoneNumber'";
		$result = mysqli_query($connection, $sql);
		if(!$result) {
			echo "<h3>Cannot change password</h3>";
		} else {
			echo "<h3>Your password is : '$generated_password'</h3>";
		}
	} else {
		echo "<h3>You must enter correct username and phone</h3>";
	}
}
?>
</body>
</html>
