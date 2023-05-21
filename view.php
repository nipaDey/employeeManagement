<?php session_start();
if(isset($_SESSION['id'])==Null)
	header("Location: http://localhost/sm/adminlogin.php");
?>

<html>
	<head>
	<title>Simple template </title>
	<link rel="stylesheet" type="text/css" href="css/styleGrid.css">
	</head>
	<body>
		<div class="wrapper">
			<div class="banner"><img src="images/b1.jpg" width="100%" height="200px"></div>
			    <div class="menu">
			         <a href="view.php">Home</a>
				     <a href="regis.html">Registration</a>
				     <a href="about.html">About</a>
				     <a href="logout.php">Log Out</a>
			    </div>
			<div class="middle">
				<div class="leftside">
					<ul type="none">
						<li>
							<a href="view.php">Home</a>
						</li>
						<li>
							<a href="regis.html">Registration</a>
						</li>
						<li>						
							<a href="about.html">About</a>
						</li><li>
							<a href="logout.php">Log Out</a>
						</li>
				</div>
				<div class="rightside">
				<h2> Employee Information</h2>
			
				<?php
				include('std.php');

				$query="SELECT * FROM `tbem` ";

				$data=mysqli_query($con,$query);
				?>
				<table border="1" width="600px" height="200px">
				<tr>
				    <th>Employee ID</th>
					<th>Employee Name</th>
					<th>Age</th>
					<th>Contact Number</th>
					<th>Email Address</th>
					<th>Employee Picture</th>
					<th>Join Date</th>
					
					<th>Action</th>
				</tr>
				
				<?php
				while($row = mysqli_fetch_array($data)) 
				{
					echo "<tr>
							<td>$row[eid]</td>
							<td>$row[ename]</td>
							<td>$row[age]</td>
							<td>$row[phone]</td>
							<td>$row[email]</td>
							<td><img src=upload/$row[picture] width=60px height=70px alt=image>
								<a href=download.php?id=$row[eid]>Download</a>
						    </td>
							<td>$row[joindate]</td>
						    <td>
								<a href='delete.php?uid=$row[eid]'>Delete</a>
								<br>
								<a href='updateform.php?uid=$row[eid]'>Update</a>
						    </td>
							
						</tr>";
				}
				
				?>
				</table>
				To insert more data click <a href="regis.html">here</a>.
			
				 
				
				</div>
			</div>
			<div class="footer"></div>
		</div>
	</body>
</html>s