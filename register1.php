
<?php
	include "conn/db_connect.php";

	if(!empty($_GET['message'])) {
    $message = $_GET['message'];

	}
	else{
		$message = '';
	}
?>
<html>
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
  </div>

<p>Create account to reserve a car or order spare parts.</p>
    <div class="log">
<form style="border-radius:" method="POST" action="register.php">
    <fieldset>
        <legend>Register</legend>
        <lable for ="firstname"> First Name: </lable><br>
        <input type="text" id="name" name="firstname"required/><br><br>
        <lable for ="lastname"> Last Name: </lable><br>
        <input type="text" id="name" name="lastname"required/><br><br>
        <lable for ="username"> User name: </lable><br>
        <input type="text" id="username" name="username"required/><br><br>
				<lable for ="user_role"> Role: </lable>
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
				?><br><br>
        <lable for ="password">Password: </lable><br>
        <input type="password" id="password" name="password" required/><br><br>
        <lable for ="confirmpassword">Confirm Password: </lable><br>
        <input type="password" id="password" name="confirmpassword" required/><br><br>
        <input type="submit" name="" class="btn btn-primary" />
     </fieldset>
</form>
</div>
<p>Have account?<a href="login.php">Log in </a>

</div>
<div class="flex-container1">
  <div class="photos">
<!--<nav class="footer">
  <class id="photos">-->
  <a href=""><img src="images/fb.jpeg" height="30"width="30"alt="email" /></a><br><br>
  <a href=""><img src="images/mail.png" height="30"width="30"alt="email"/></a>
    <br>
  <a href=""><img src="images/callw).png" height="30"width="30"alt="call" /></a><br>
  <a href=""><img src="images/whatsapp.jpeg"height="30"width="30" alt="whatsapp" /></a><br>
 <a href=""><img src="images/locale.jpeg"height="30"width="30" alt="location" /></a><br>
 <a href=""><img src="images/twiter.png"height="30"width="30" alt="location" /></a><br>
</div>
<div class="copy">
  Copyright &copy sharcom.com
</div>
<div class="links">
  <h3>quick links</h3><br>
<ul style-type:none>
  <li><a href="sharcom.htm">Home</a></li>
  <li><a href="about_us.htm">About Us</a></li>
  <li><a href="contact_us.htm">Contact Us</a></li>
</ul>
</div>
</div>
    <!--%DateStamp%-->12/21/2023<!---->

</body>
</html>
