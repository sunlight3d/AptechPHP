<!DOCTYPE html>
<html>
<head>
<?php 
	include('database/database.php');
?>
	<title> </title>
</head>
<body>
<p>Change password form </p>
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
				Current password
			</td>
			<td> 
				<input type="password" name="password">
			</td>
		</tr>
		<tr> 
			<td> 
				New password
			</td>
			<td> 
				<input type="password" name="newPassword">
			</td>
		</tr>

	</table>
	<button type="submit" name="submit">Change password</button>
</form>
<?php  
//http:localhost:80/c1808i-05-de1/change_password.php
global $connection;
if(isset($_POST["submit"])) {
	// echo "<h1>alo</h1>";
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$newPassword = $_POST['newPassword'];
	$encryptedPassword = sha1($password);
	$userName = mysqli_escape_string($connection, $userName);
	$sql1 = "SELECT * FROM abc12users WHERE USERNAME='$userName' AND PASSWORD_HASH='$encryptedPassword'";
	try {
		$result = mysqli_query($connection, $sql1);
		if(mysqli_num_rows($result) > 0) {
			//
			if($newPassword === $password || $newPassword === '') {
				echo "<h2>Password must be not blank or the same as old password</h2>";
				return;
			} else {
				$newEncryptedPassword = sha1($newPassword);
				$sql2 = "UPDATE abc12users SET PASSWORD_HASH='$newEncryptedPassword' WHERE ".
						"USERNAME = '$userName' AND PASSWORD_HASH='$encryptedPassword'";
				mysqli_query($connection, $sql2);
				echo "<h2>Change password successfully</h2>";
			}
		} else{
			echo "<h2>Wrong name and password</h2>";
		}
	} catch(Exception $error) {
		$error_detail = $error->getMessage();
		echo "<h2>Cannot change password. Error: $error_detail</h2>";
	} finally {

	}
}
?>
</body>
</html>
