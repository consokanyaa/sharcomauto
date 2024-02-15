<?php
	include "conn/db_connect.php";
?>
<html>
	<head>
		    <link href="css/bootstrap.min.css" rel="stylesheet">
			<link href="css/mdb.min.css" rel="stylesheet">
			<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<form method='post' action='addition_done.php'>
			<table>
				<tr>
					<th colspan='2' align='left'>New Item:</th>
				</tr>
				<tr>
					<td>Item Name:</td>
					<td><input type='text' name='itemname'/></td>
				</tr>
				<tr>
					<td>Price:</td>
					<td><input type='text' name='price'/></td>
				</tr>
				<tr>
					<td>Discount:</td>
					<td><input type='text' name='discount'/></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><textarea rows="4" cols="50" name= "description">
					</textarea></td>
				</tr>
				<tr>
					<td>
						<button type='submit' name= 'submit'>Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>
