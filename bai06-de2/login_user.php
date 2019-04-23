<!-- http://localhost:80/bai06-de2/login_user.php -->
<?php 
include('database/database.php');
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login user</title>
</head>
<body>
	<h3>Login form</h3>
	<form method="POST">
		<table>
			<tr>
				<td>User name:<input type="text" name="UserName"></td>
			</tr>
			<tr>
				<td>Password:<input type="password" name="Password"></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="remember" id="remember" />Remember password</td>
			</tr>
		</table>
		
		<button type="submit" name="submit">Login</button>
		
	</form>
<?php  
//$_POST = super global
// session_unset();
// session_destroy();
if(isset($_SESSION['UserName'])) {
	if(strlen($_SESSION['UserName']) > 0) {
		header('Location: welcome.php');
		exit();
	}
}
if(isset($_POST["submit"])) {
	$username = $_POST["UserName"];
	$password = $_POST["Password"];
	if(empty($username) or empty($password)){
		echo "<h1>You must input name, pass</h1>";
		exit();
	} 
	
	$username = mysqli_real_escape_string($connection, $username);
	$sql = "SELECT * FROM abc12users WHERE UserName='".$username."'";
	$result = mysqli_query($connection, $sql);
	if(mysqli_num_rows($result) > 0) {
		//Login
		while($row=mysqli_fetch_assoc($result)) {
			$encrypted_password = sha1($password);
			if($row['PASSWORD_HASH'] == $encrypted_password) {
				echo "<h1>Login user successfully</h1>";
				if(empty($_POST["remember"])) {
					session_unset();
				} else {
					$_SESSION['UserName'] = $username;
					$_SESSION['Password'] = $Password;
				}
				header('Location: welcome.php');
			} else {
				echo "<h1>Incorrect username or password</h1>";
				session_unset();
			}
		}
	} else {
		echo "<h1>Cannot find user</h1>";
	}
}
?>
</body>
</html>