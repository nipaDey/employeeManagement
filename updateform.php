<html>
	<head>
	<title>Simple template </title>
	<link rel="stylesheet" type="text/css" href="css/styleGrid.css">
	</head>
	<body>
		<div class="grid-container">
		<div class="item2"><img src="images/logo.png"></div>
		  <div class="item1"><div>Bangladesh University</div></div>
		  <div class="item3">
			<a href="http://www.bu.edu.bd/">Bangladesh University</a>
			<a href="https://buportal.cloudapp.net/LoginPage.aspx">BU Portal</a>
		  </div>
		  <div class="item4">
		  <ul type="none">
				 <li>
					<a href="http://www.bu.edu.bd/">Bangladesh University</a>
				 </li>
				 <li>
					<a href="https://buportal.cloudapp.net/LoginPage.aspx">BU Portal</a>
				  </li>
		</ul>
		  </div>
		  <div class="item5">
			<h2> Registration</h2>
			<?php
			include('std.php');
			$id=$_GET['uid'];
			$query="SELECT * FROM `tbem` where eid=$id";

				$data=mysqli_query($con,$query);
				$row= mysqli_fetch_array($data);
			?>	
				 <form action="update.php" method="POST">
				 <table width="500" height="300px">
					<tr>
						<td>Employee ID:</td><td><input type="text" name="eid" value="<?php echo $row['eid'];?>"disabled >
												<input type="text" name="eid" value="<?php echo $row['eid'];?>" hidden>
										</td></tr>
					<tr><td>Employee Name:</td><td><input type="text" name="ename" value="<?php echo $row['ename'];?>"></td></tr>
					<tr><td>Age:</td><td><input type="text" name="age" value="<?php echo $row['age'];?>"></td></tr>
					<tr><td>Contact Number:</td><td><input type="text" name="phone" value="<?php echo $row['phone'];?>"></td></tr>
					<tr><td>Email Address:</td><td><input type="text" name="email" value="<?php echo $row['email'];?>"></td></tr>
					<tr><td>Join Date:</td><td><input type="text" name="joindate" value="<?php echo $row['joindate'];?>"></td></tr>
					<tr><td colspan="2"><input type="submit" value="Submit"></td></tr>
					</table>
				</form>
				
		  </div>
		  <div class="item6">Credit goes here..................</div>
		</div>
	</body>
</html>