<html><style>
.form__input {
 height:25px;
  width: 25%;

  border-radius: 17px;
  outline-color:white;
 background-color: white;
 color: black;
 outline: none;
 float:right;
 margin-right:25%;
}
.c2{
  height:30px;
  width:100px;
  border-radius: 5px;
  border-style:ridge;
  margin-left: 10px;
  margin-top: 5px;

}
.c6{
		width:25%;
		float:right;
		margin-right:25%;
		border-radius: 5px;
	 outline:0;
	 line-height:25px;
}
.c2:hover{
  background-color:#dbfaff;
  color:black;
  }
</style>
<body><form action="search2.php" method="post">
  SELECT THE FILE YOU WANT TO SEARCH
<?php
$con=mysqli_connect("localhost","root","") or die("can't connect");
	if(!mysqli_select_db($con,"ass5")){
		mysqli_query($con,"CREATE DATABASE ass5");
		mysqli_select_db($con,"ass5");
	}
	if(mysqli_query($con,"SELECT COUNT(*) FROM ass5")){
	$count=mysqli_fetch_row(mysqli_query($con,"SELECT COUNT(*) FROM ass5"));
	$count=$count[0];
}
	$q="select name from ass5";
	echo "<select name='checklist' class='form__input'>";
	$fc=mysqli_query($con,$q);
	while ($count>0) {
		$row=mysqli_fetch_row($fc);
	echo "<option  value='$row[0]'/>$row[0]<br><br>";
	$count-=1;
	}
echo "</select>";
	?>

  <br>
  <br>
ENTER TEXT YOU WANT TO SEARCH  <input type="text" name="text1" class="c6"><br><br><br>
		<div><input type='submit' name='submit' class="c2" /></div></form></body></html>
