<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles3.css"/>
  <title>SHARCOM AUTOMOTIVES</title>
<nav class="header">
  <div id='nav'>
  <img src="images/car9.jpg" height="50"width="40" alt="logo"id="logo"  />

<nav>
 <ul class="nav">
    <li><a href="index.htm">Home</a></li>
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



		<style>
			.tooltip {
				position: relative;
			}
			.tooltip .tooltiptext {
				visibility: hidden;
				width: 120px;
				background-color: black;
				color: #fff;
				text-align: center;
				border-radius: 6px;
				padding: 5px 0;

				/* Position the tooltip */
				position: absolute;
				z-index: 1;
			}
			.tooltip:hover .tooltiptext {
				visibility: visible;
			}
			table {
				border-collapse: collapse;
			}

			table, th, td {
				border: 1px solid black;
			}
		</style>


		<?php
			include "conn/db_connect.php";
			session_start();
			$user_id = $_SESSION['user_id'];

			$query = "select * from users where id = ".$user_id."";
			$result = $conn->query($query)->fetch_assoc();
			$role = $result["role"];
			?>
				<table width="100%">
				<p align= 'right' colspan = '2'><a href="logout.php">Logout</a></p>
			<?php
			if ($role == '1')
			{
				?>
					<td colspan='4'>
						<input type="button" onclick="location.href='addnewitem.php';" value="Add New Item" />
					</td>

						<tr>
							<th>#</th><th>Item</th><th>Price</th><th>Discount</th>
						</tr>
						<?php
							$query = "select * from items where status = '1'";
							$result = $conn->query($query);
							$count = 1;
							while($row = $result->fetch_assoc())
							{
								$itemid = $row["id"];
								$itemname = $row["itemname"];
								$itemprice = $row["itemprice"];
								$discount = $row["discount"];

								?>
									<tr>
										<td><?php echo $count; ?></td><td><?php echo $itemname; ?></td><td>$ <?php echo $itemprice; ?></td><td><?php echo $discount; ?>%</td>
									</tr>
								<?php
								$count++;
							}
						?>

				<?php
			}
			if ($role == '2')
			{
				?>
						<tr>
							<th>#</th><th>Item</th><th>Price</th>
						</tr>
						<?php
							$query = "select * from items where status = '1'";
							$result = $conn->query($query);
							$count = 1;
							while($row = $result->fetch_assoc())
							{
								$itemid = $row["id"];
								$itemname = $row["itemname"];
								$itemprice = $row["itemprice"];
								?>
									<tr>
										<td><?php echo $count; ?></td><td><?php echo $itemname; ?></td><td>$<?php echo $itemprice; ?></td>
									</tr>
								<?php
								$count++;
							}
						?>


				<?php
			}
			if ($role == '3')
			{
				?>
						<tr>
							<th>#</th><th>Item</th>
						</tr>
						<?php
							$query = "select * from items where status = '1'";
							$result = $conn->query($query);
							$count = '1';
							while($row = $result->fetch_assoc())
							{
								$itemid = $row["id"];
								$itemname = $row["itemname"];
								$itemprice = $row["itemprice"];
								$item_dsc = $row["item_dsc"];

								?>
								  <tr>
									<td>
										<div class="tooltip"><?php echo $count; ?>
										  <span class="tooltiptext"><?php echo $item_dsc; ?></span>
										</div>
									</td>
									<td>
										<div class="tooltip"><?php echo $itemname; ?>
										  <span class="tooltiptext"><?php echo $item_dsc; ?></span>
										</div>
									</td>
								  </tr>

								<?php
								$count++;
							}
						?>

				<?php
			}
		?>
		</table>
  </div>
  </div>
     </body>
     </html>
