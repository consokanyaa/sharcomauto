<!DOCTYPE HTML>

<!--<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles3.css"/>
<head>
<title>Register</title>
<nav class="header">
  <div id='nav'>
  <img src="images/car9.jpg" height="50"width="40" alt="logo"id="logo"  />

<nav>
 <ul class="nav">
    <li><a href="sharcom.htm">Home</a></li>
    <li><a href="about_us.htm">About Us</a></li>
    <li><a href="contact_us.htm">Contact Us</a></li>
    <a href="login.php"><img src="images/human).png"height="30"
      width="30" alt="user" /></a>
 </ul>
</nav>
<div class="clear"></div>
</div>
</nav>
</head>
<body style="background-color:linen;" style="color:blue">
  <div class="flex-container">
    <div class="car">
  <img src="images/car9.jpg"height="180"width="300" alt="car two" />
</div>-->
//<?php
//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//	$dbname = "login";

  // Create a connection
//  $conn = new mysqli($servername, $username, $password, $dbname);

   //Check connection
//  if ($conn->connect_error) {
  //    die("Connection failed: " . $conn->connect_error);
//  }

  // Retrieve form data
//	$firstname = $_POST['firstname'];
// $lastname = $_POST['lastname'];
// $email = $_POST['email'];
//$idno = $_POST['idno'];
 //$password = $_POST['password'];
 //$confirm_password = $_POST["confirm_password"];
// $status = '1';
// $password = password_hash($passwordb, PASSWORD_BCRYPT);

  // SQL query to insert data into the database
  //$sql = "INSERT INTO contacts (firstname, lastname, email, idno, password)
 //VALUES ('$firstname', '$lastname', '$email', 'idno', '$password')";

  //if ($conn->query($sql) === TRUE) {
  //    echo "Data inserted successfully!<br>".
  //    "click to log";
	//		header("location: login.php?message=".$message."");
//  } else {
  //    echo "Error: " . $sql . "<br>" . $conn->error;
//  }

  // Close the connection
  //$conn->close();
//?>
 <!--<a href="login.php">Log in</a>
</body>
</html>-->

/<?php
	include "conn/db_connect.php";
	session_start();

		$firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
		$username = $_POST["username"];
		$user_role = $_POST["user_role"];
		$passwordb = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		$status = '1';
		$password = password_hash($passwordb, PASSWORD_BCRYPT);
		if($firstname!='' && $lastname!='' && $username!=''&& $user_role!=''
    && $password!=''&& $confirm_password!='')
		{
			if($passwordb == $confirm_password)
			{
				$passwordlength = strlen($passwordb);

				if($passwordlength >= '8')
				{
					if( preg_match('([a-zA-Z].*[0-9]|[0-9].*[a-zA-Z])', $passwordb) )
					{
						$sql = "INSERT INTO users (firstname, lastname, username, password, role,
							status) VALUES ('".$firstname."', '".$lastname."','".$username."',
								 '".$password."', '".$user_role."', '".$status."')";
						$conn->query($sql);
						$message = 'You have successfully signed up. Now Log in:';
						header("location: login.php?message=".$message."");
					}
					else
					{
						$message = 'Make sure your password has both characters and numbers';
						header("location: connection.php?message=".$message."");
					}
				}

				else
				{
					$message = 'Make sure your password length is equal or greater than 8';
					header("location: connection.php?message=".$message."");
				}
			}
			else{
				$message = 'Kindly Ensure the password matches';
				header("location: connection.php?message=".$message."");
			}
		}
		else
		{
			$message = ' Kindly fill in all the fields';
			header("location: connection.php?message=".$message."");
		}
?>
