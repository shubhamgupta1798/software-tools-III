<?php


session_start();
$_SESSION["gotouserprofile"]='';
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$c=$_SESSION['myinput'];
?>
<html>
<head>
  <style>
  body{
    background: url("images/11.jpeg");
    background-attachment: fixed;
   background-size: 100%;
 background-repeat: repeat-y;
  }
  </style>
</head>
<body>
<div style='height:8%;width:100%;position: fixed;top: 10;'>
<i><a href='user.php'><span style='font-family:Lment-v02;font-size:40px;background-color:#2d271b6b;color:#ffb1b1;text-decoration: underline;text-decoration-color: white;' >BLOGGER</span></i></a>
<?php
if($c=='')
{
  echo('<script>alert("Select Something")</script>');
  header('Location:viewer.php');
}
else {
    $sql = "SELECT * FROM blogs where title='$c'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {

          $v=1;


              while($row = $result->fetch_assoc()) {
                $var2=$row["title"];
                $var3=$row["content"];
                $var4=$row["likes"];
                $var=$row["blog"];
                $var5=$row['comment'];
                
                echo("
                <div style='margin-left:13%;background-color:#c2c2cab3;;padding:2px 0px 0px 10px; width:70%;align:center'>

              <h1>".$v." ) ".$var2."</h1>


              <h3>  ".$var."</h3>
                <br>
                ".$var3."
                <br>
                <br>
              <b>  Claps  :</b>".$var4."
              <br>

              <b> Comment :</b>".$var5."
                </div>
      <br>
                </center>");
      $v=$v+1;

              }
            }



    else {
      $sql = "SELECT * FROM blogs where blogger='$c'";
      $result1=$conn->query($sql);

if($result1->num_rows>0){

    $v=1;


        while($row = $result1->fetch_assoc()) {
          $var2=$row["title"];
          $var3=$row["content"];
          $var4=$row["likes"];
          $var=$row["blog"];

          echo("
          <div style='margin-left:13%;background-color:#c2c2cab3;;padding:2px 0px 0px 10px; width:70%;align:center'>

        <h1>".$v." ) ".$var2."</h1>


        <h3>  ".$var."</h3>
          <br>
          ".$var3."
          <br>
          <br>
        <b>  Claps  :</b>".$var4."
          </div>
<br>
          </center>");
$v=$v+1;

        }
      }

}
}
 ?>
