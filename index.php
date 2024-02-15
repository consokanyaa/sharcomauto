
<?php
	include "conn/db_connect.php";
	session_start();

		$username = $_POST["username"];
		$password = $_POST["password"];

		$query = "select * from users where username = '".$username."'";
		$result = $conn->query($query)->fetch_assoc();
		$stored_secret = $result["password"];
		if (password_verify($password, $stored_secret))
		{
		  echo 'OK';
		  $user_id = $result["id"];
		  $_SESSION['user_id'] = $user_id;
		  header("location: quotation.php");
		}
		else
		{
		  $errormessage = "Invalid Credentials!";
		header("location: login.php?message=".$errormessage."");
		}


?>
