<?php
	include "conn/db_connect.php";

	if(!empty($_GET['message'])) {
    $message = $_GET['message'];

	}
	else{
		$message = '';
	}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles3.css"/>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
  <title>SHARCOM AUTOMOTIVES</title>
<nav class="header">
  <div id='nav'>
  <img src="images/car9.jpg" height="50"width="40" alt="logo"id="logo"  />

<nav>
 <ul class="nav">
    <li><a href="index.htm">Home</a></li>
    <li><a href="about_us.htm">About Us</a></li>
    <li><a href="contact_us.htm">Contact Us</a></li>
    <a href="login.htm"><img src="images/human).png"height="30"
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
	</div>
     <div class="home">



		<form method='post' action='register.php'>
			<fieldset>
	        <legend>Register</legend>
			<table>
				<tr>
					<td><font color="red"><?php echo $message;?></font></td>
				</tr>
				<tr>
					<td>First Name:</td>
					<td><input type='text' name='firstname'/></td>
				</tr>
				<tr>
					<td>Last Name:</td>
					<td><input type='text' name='lastname'/></td>
				</tr>
				<tr>
					<td>Username:</td>
					<td><input type='text' name='username'/></td>
				</tr>
				<tr>
					<td>Role:</td>
					<td>
						<?php
							echo '<select name="user_role" id="user_role">';
							echo '<option  value="">Select Role</option>';
							$query = "select * from userrole where status = '1'";
							$result = $conn->query($query);
							while($row = $result->fetch_assoc())
							{
								$role = $row["rolename"];
								$role_id = $row["id"];

								echo '<option value="'.$role_id.'">'.$role.'</option>';
							}
							echo '</select>';
						?>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type='password' name='password' id='password'/></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type='password' name='confirm_password' id='confirm_password'/></td>
				</tr>
				<tr>
					<td>
						<button type='submit' name= 'submit'>Submit</button>
					</td>
				</tr>
			</table>
		</fieldset>
		</form><br>
	<p>	Have account?<a href="login.php">Login</a></p>
</div>
</div>
		<div class="flex-container1">
		  <div class="photos">
		<!--<nav class="footer">
		  <class id="photos">-->
		  <a href=""><img src="images/fb.jpeg" height="30"width="30"alt="fb" /></a><br><br>
		 <a href=""><img src="images/mail.png" height="30"width="30"alt="email"/>
		    <br>
		  <a href=""><img src="images/callw).png" height="30"width="30"alt="call" /><br>
		  <a href=""><img src="images/whatsapp.jpeg"height="30"width="30" alt="whatsapp" /><br>
	<a href="">	<img src="images/locale.jpeg"height="30"width="30" alt="location" /><br>
	<a href="">	<img src="images/twiter.png"height="30"width="30" alt="location" /><br>
		</div>
		<div class="copy">
		  Copyright &copy sharcom.com
		</div>
		<div class="links">
		  <h3>quick links</h3>
		  <ul style-type="none">
		<li><a href="index.htm">Home</a></li>
		  <li><a href="about_us.htm">About Us</a></li>
		  <li><a href="contact_us.htm">Contact Us</a></li>
		</ul>
		</div>
		</div>
		    <!--%DateStamp%-->12/21/2023<!---->
		</body>

		</html>
	</body>
</html>
