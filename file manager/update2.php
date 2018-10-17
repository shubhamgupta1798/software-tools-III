<?php

$con=mysqli_connect("localhost","root","") or die("cannot connect...");
if(!mysqli_select_db($con,"ass5")){
		mysqli_query($con,"CREATE DATABASE ass5");
		mysqli_select_db($con,"ass5");
}
session_start();
$filename=$_SESSION['name'];
$edittedtext=addslashes($_POST['edittedtext']);

$q="UPDATE ass5 SET data='$edittedtext' WHERE name='$filename'";
if(mysqli_query($con,$q)){
	echo "<script>alert('updated successfully...');</script>";
}

?>