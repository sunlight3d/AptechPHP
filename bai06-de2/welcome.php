<h1>Welcome</h1>
<form method="POST">
<button type="submit" name="submit">Log out</button>		
</form>
<?php 
session_start();
if(isset($_POST["submit"])) {
    session_unset();
    header('Location: login_user.php');
}

 ?>