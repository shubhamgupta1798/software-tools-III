<?php
$con=mysqli_connect("localhost","root","") or die("can't connect");
if(!mysqli_select_db($con,"ass5")){
  mysqli_query($con,"CREATE DATABASE ass5");
  mysqli_select_db($con,"ass5");
}
$searchtext=$_POST['text1'];
	$filename=$_POST['checklist'];
	$fetch_qry="SELECT `data` from `ass5` WHERE name='$filename'";
  //echo($filename);
	$fetch_data=mysqli_fetch_row(mysqli_query($con,$fetch_qry));
	$fetch_data=nl2br($fetch_data[0]);

	$offset=strpos($fetch_data,$searchtext);
	if($offset!==false){
    echo("found at ");
		echo $offset;
	}
	else{
		echo "<script>alert('\'$searchtext\' not present in file \'$filename\'');</script>";

	} ?>
