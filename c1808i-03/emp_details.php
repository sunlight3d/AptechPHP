<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<?php 
if(count($_POST) > 0) {
	$employeeId = $_POST['employeeId'];
	$name = $_POST['name'];
	$department = $_POST['department'];
	$email = $_POST['email'];
	echo '<div class="alert alert-success col-md-4" role="alert">';
	echo 'YOUR PERSONAL DETAILS';
	echo '</div>';
	echo "<p class='alert alert-success col-md-4'>employeeId:".$employeeId."</p>";
	echo "<p class='alert alert-success col-md-4'>name: $name </p>";
	echo "<p class='alert alert-success col-md-4'>department:".$department."</p>";
	echo "<p class='alert alert-success col-md-4'>email:".$email."</p>";
}
 ?>
</body>
</html>



