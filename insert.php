<?php
include('std.php');

$eid=$_POST['eid'];
$ename=$_POST['ename'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];

$picture=$_FILES['picture']['name'];
$file_loc = $_FILES['picture']['tmp_name'];
$folder="upload/";

move_uploaded_file($file_loc,$folder.$picture);

$joindate=$_POST['joindate'];

$query="INSERT INTO `tbem` (`eid`, `ename`,`age`, `phone`, `email`,`picture`,`joindate` ) VALUES ('$eid', '$ename','$age', '$phone', '$email','$picture','$joindate')";
mysqli_query($con,$query);

header("Location: http://localhost/sm/view.php");
?>