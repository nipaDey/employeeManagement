<?php session_start();
$_SESSION['id']=$_POST['uid'];

include("std.php");

$id=$_POST['uid'];
$pass=$_POST['pass'];

$query="select * from tbuser where uid=$id";

$data=mysqli_query($con,$query);
$row=mysqli_fetch_array($data);

if($data)
{	
     if($row['uid']==$id&&$row['password']==$pass)
	     header("Location: http://localhost/sm/view.php");
     else
		 header("Location: http://localhost/sm/adminlogin.php");
}
else
	header("Location: http://localhost/sm/adminlogin.php");

?>