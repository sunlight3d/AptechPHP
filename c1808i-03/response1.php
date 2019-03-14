<?php 
//Has params ?
//http://alienware:80/c1808i-03/response1.php?name=Hoang&email=abc@gmail.com&age=20
//Display 50 emails of page 12 => Paging
//http://localhost:80/emails?page_number=11&number_of_emails=50
//SELECT TOP 50 * FROM tblEmails OFFSET 11*50 => SQL Server
//SELECT * FROM tblEmails OFFSET 11*50 LIMIT 50 => MySQL 
if(isset($_GET['nickname'])) {
	$nickname = $_GET['nickname'];
	echo "<h1>nickname = ".$nickname."<h1>";
	if($nickname == "Hoang") {
		header("Location: response2.php");
	} else {
		header("Location: response3.php");
	}
}
 ?>
