<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
<title>Exchange Donor List</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
		td{
			width: 200px;
			height: 50px;
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
				<h1>Exchange Donor List</h1>
				<center><div id="form">
					<table>
						<tr>
							<td><center><b>Name</b></center></td>
							<td><center><b>Father's Name</b></center></td>
							<td><conter><b>Address</b></conter></td>
							<td><center><b>City</b></center></td>
							<td><center><b>Age</b></center></td>
							<td><center><b>Blood Group</b></center></td>
							<td><center><b>Exchange Blood Group</b></center></td>
							<td><center><b>Mobile No</b></center></td>
							<td><center><b>E-Mail</b></center></td>
						</tr>
						<?php 
						$q=$db->query("SELECT * FROM exchange_b");
						while($r1=$q->fetch(PDO::FETCH_OBJ))
						{
						
						?>
						<tr>
							<td><center><?= $r1->name; ?></center></td>
						    <td><center><?= $r1->fname; ?></center></td>
							<td><center><?= $r1->address; ?></center></td>
							<td><center><?= $r1->city; ?></center></td>
							<td><center><?= $r1->age; ?></center></td>
							<td><center><?= $r1->bgroup; ?></center></td>
							<td><center><?= $r1->exbgroup; ?></center></td>
                            <td><center><?= $r1->mno; ?></center></td>
							<td><center><?= $r1->email; ?></center></td>
						</tr>
						<?php 
					     }
						?>
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