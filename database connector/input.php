
<html>
<head>

  <style>
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
  label{
    float:right;
    margin-right: 145px;
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
      float: right;
      margin-right: 200px;

      border-radius: 5px;
     outline:0;
     line-height:25px;
  }
  input.c7{

      float: right;
      margin-right: 10px;


     outline:0;

  }

  div.heading1{
  width:100%;
  text-align:center;
  height:25px;
  line-height:wrapText;

  }
  input.c1{
    height:25px;
    border-radius: 5px;
    border-style:ridge;
    margin-left: 10px;
    margin-top: 5px;

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
    background-color: #4286f4;
  }
  button.c2{
    height:30px;
  	width:100px;
    border-radius: 5px;
    border-style:ridge;
    margin-left: 10px;
    margin-top: 5px;

  }
  button.c2:hover{
  	background-color:#dbfaff;
  	color:black;
  	}
  div.part2{
    width:75%;
    float:right;
    height:50%;
    background-color: #b6bac1;
  }
  div.part3{
    width:100%;
    height:20%;
    background-color: coral;
    position: fixed;

  bottom: 0;

  }
  
  div.m1{
    float: right;
    margin-right: 400px;
  }
  </style>
</head>
<body>
  <div class="heading1"><h2>REGISTRATION DETAILS</h2></div>
  <hr>
  <hr>
<form method="POST" >
<div>
Admission Number:
  <input class="c6" type="TEXT" name="adn" id="adn" required>
</div>
  <BR>
    <div>
    First Name:
    <input class="c6" type="TEXT" name="fname" id="fname" required>
    <BR>
</div>
<br>
<div>
Last Name:
<input class="c6" type="TEXT" name="lname" id="lname" required>
<BR>
</div>
<br>
<div>
Email:
<input class="c6" type="email" name="mail1" id="mail1" required>
<BR>
</div>
<br>


<div>
  Semester
  <input class="c6" type="TEXT" name="sem" id="sem" required>
  <br>
</div>
<br>
<input class="c1" type="submit" name="isubmit">
</form>
</body>
</html>


<?php


if(isset($_POST['isubmit'])){
  $servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="assign3";
$a=$_POST['adn'];
$b=$_POST['fname'];
$c=$_POST['lname'];
$d=$_POST['mail1'];
$e=$_POST['sem'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
  //echo("sucessful");
  $sql = "INSERT INTO registration (addno,firstname,lastname,email,sem)
VALUES ('$a', '$b', '$c','$d','$e')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}


}
?>
