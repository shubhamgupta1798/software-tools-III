<?php

$con=mysqli_connect("localhost","root","") or die("cannot connect...");
if(!mysqli_select_db($con,"ass5")){
		mysqli_query($con,"CREATE DATABASE ass5");
		mysqli_select_db($con,"ass5");
}
$filename=$_POST['checklist'];

$q="delete from ass5 WHERE name='$filename'";
if(mysqli_query($con,$q)){
	echo "<script>alert('deleted successfully...');</script>";
}

?>