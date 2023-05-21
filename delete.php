<?php
include('std.php');
$id=$_GET['uid'];

	$query="delete from tbem where eid=$id";
	mysqli_query($con,$query);
	
header("Location: http://localhost/sm/view.php");	
?>