<?php
	include "conn/db_connect.php";
	session_start();

		$itemname = $_POST["itemname"];
		$price = $_POST["price"];
		$discount = $_POST["discount"];
		$description = $_POST["description"];
		$status = '1';

		$sql = "INSERT INTO items (itemname, itemprice, discount, item_dsc, status) VALUES ('".$itemname."', '".$price."', '".$discount."', '".$description."', '".$status."')";
		$conn->query($sql);

		header("location: quotation.php");

?>
