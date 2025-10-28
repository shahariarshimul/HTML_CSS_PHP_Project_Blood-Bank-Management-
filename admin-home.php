<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
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
				<h1>Welcome Admin Home</h1><br><br>
				<ul>
					<li><a href="donor-red.php">Donor Registration</a></li>
					<li><a href="donor-list.php">Donor list</a></li>
					<li><a href="stoke-blood-list.php">Stoke Blood List</a></li>
					
				</ul><br><br><br><br><br>
				<ul>
					<li><a href="out-stoke-blood-list.php">Out Stoke Blood</a></li>
					<li><a href="exchange-blood-list.php">Exchange Blood Registration</a></li>
					<li><a href="exchange-blood-list1.php">Exchange Blood List</a></li>
				</ul>
				
			</div>
			<div id="footer"><h4 align="center">Shahariarshimul29@gmail.com</h4>
			<p align="center"><a href="logout.php"><font color="white">Logout</font></a></p>
		</div>
		</div>
	</div>

</body>
</html>