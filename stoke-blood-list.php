<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Donor Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 23px;
		}
	</style>
</head>
<body>
	<div id="full">
		<div id="inner_full">
			<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color: white;">Blood Bank Managment System</a></h2></div>
			<div id="body">
				<br>
				<?php
				  $un=$_SESSION['un'];
				  if(!$un)
				  {
				  	header("Location:index.php");
				  }
				?>
				<h1>Stoke Blood List</h1>
				<center><div id="form">
					<table>
						<tr>
							<td><center><b>Name</b></center></td>
							<td><center><b>Qty</b></center></td>
							
						</tr>
						
					      <tr>   
							<td><center>A+</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>A-</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='A-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>B+</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>B-</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='B-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>AB+</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>AB-</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>O+</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>
						 <tr>   
							<td><center>O-</center></td>
							<td><center>
								<?php 
								$q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O-'");
								echo $row=$q->rowcount();
								?>
							</center></td>
						</tr>

					</table>
				
					
				</div></center>
				
			</div>
			<div id="footer"><h4 align="center">Shahariarshimul29@gmail.com</h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
		</div>
		</div>
	</div>

</body>
</html>