<?php
include('std.php');
$id=$_POST['eid'];

	$query="UPDATE `tbem` SET `ename` = '$_POST[ename]',
	                          `age` = '$_POST[age]',
							  `phone` = '$_POST[phone]', 
							  `email` = '$_POST[email]',
							  `joindate` = '$_POST[joindate]'
							  where eid=$id";
	mysqli_query($con,$query);
	
header("Location: http://localhost/sm/view.php");	
?>