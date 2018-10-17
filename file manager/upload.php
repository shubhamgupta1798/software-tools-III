<html>
<style type="text/css">

	input.c5{
    width:70%;
    float:right;

       border-radius: 5px;
      outline:0;
      line-height:25px;
  }
  div.c1{
    border-style: ridge;
     border-radius: 5px;

     line-height:30px;
  }
  textarea{
    width:80%;
    float:right;
    border-style: inset;
    border-width: medium;

       border-radius: 5px;
      outline:0;
  }
  div.c2{
    padding-left: 10px;
  }
  input.c6{
      width:25%;
      float:right;
      margin-right:40%;
      border-radius: 5px;
     outline:0;
     line-height:25px;
  }

  div.heading1{
  width:100%;
  text-align:center;
  height:25px;
  line-height:wrapText;
   background-color:#abb7cc;
  }
	button.c2{
    height:30px;
  	width:100px;
    border-radius: 5px;
    border-style:ridge;
    margin-left: 10px;
    margin-top: 5px;
		margin-left: 150px;
  }
  button.c2:hover{
  	background-color:#dbfaff;
  	color:black;
  	}
  div.heading{
  width:100%;
  padding-left: 20px;
  line-height:wrapText;
   background-color:#abb7cc;
  }
  div.heading2{
  width:100%;

  line-height:wrapText;
   background-color:#abb7cc;
   text-align:right;
  }
  div.part1{
    width:20%;
    height:50%;
    float:left;

  }
  div.part2{
    width:75%;
    float:right;
    height:50%;

  }
  div.part3{
    width:100%;
    height:20%;

    position: fixed;

  bottom: 0;

  }


</style>
<body style="font-size: 20px;"><center>

<form method='POST' enctype="multipart/form-data"><div>
Choose File :<input class="c6" type='file' name='textfile' accept='.txt'/></div>
<br>
<div >Save as :<input type='text' name='inpn' class="c6"/></div>
<br></center>
<div><button type='submit' name='submit' class="c2"  >SUBMIT</button></div>

</form>
</body>
</html>


<?php

if(isset($_POST['submit'])){
	$con=mysqli_connect("localhost","root","") or die("can't connect");
	if(!mysqli_select_db($con,"ass5")){
		mysqli_query($con,"CREATE DATABASE ass5");
		mysqli_select_db($con,"ass5");
	}

	$filename=$_POST['inpn'];
	$filecontents=file_get_contents($_FILES['textfile']['name']);
	$q="INSERT INTO ass5 (name,data) VALUES('$filename','$filecontents')";
	if(!mysqli_query($con,$q)){
		mysqli_query($con,"CREATE TABLE ass5 (name VARCHAR(255), data LONGTEXT)");
		mysqli_query($con,$q);
	}
	echo "<script>alert('File has been uploaded successfully');</script>";
}
?>
