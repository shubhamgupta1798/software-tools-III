<?php
$filename=$_POST['checklist'];
$con=mysqli_connect("localhost","root","") or die("can't connect");
	if(!mysqli_select_db($con,"ass5")){
		mysqli_query($con,"CREATE DATABASE ass5");
		mysqli_select_db($con,"ass5");
	}
	$q="SELECT `data` from `ass5` WHERE name='$filename'";
	$data=implode(mysqli_fetch_row(mysqli_query($con,$q)));
	session_start();
	$_SESSION["name"]=$filename;
	echo "<style>
	.c2{
    height:30px;
  	width:100px;
    border-radius: 5px;
    border-style:ridge;
    margin-left: 10px;
    margin-top: 5px;

  }
  .c2:hover{
  	background-color:#dbfaff;
  	color:black;
  	}
	.form__input {
 height:10px;
  width: 30%;
  padding: 20px;
  border-radius: 17px;

  outline-color:white;
 background-color: white;
 color: black;
 outline: none;
 margin-top: 10px;
 margin-left: 10px;
}</style><center><form method='POST' action='update2.php'>
	<textarea style='width:70%;height:70%;margin:10%;' name='edittedtext' class='form__input'>$data</textarea><br>
	<input type='hidden' name='filename' value='$filename'/>
	<input type='submit' name='submit' class='c2'/>
	</form></center>";
?>
