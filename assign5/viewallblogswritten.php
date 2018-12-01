<?php

session_start();
$u=$_SESSION["username_signedin"];
if($u<>'')
{
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM blogs where blogger='$u'";
    $result = $conn->query($sql);
    $v=1;
    if ($result->num_rows > 0) {


        while($row = $result->fetch_assoc()) {
          $var2=$row["title"];
          $var3=$row["content"];
          $var4=$row["likes"];
          $var=$row["blog"];

          echo("<html>
          <head></head><body>
          <div style='background-color:#c2c2cab3;;padding:2px 0px 0px 10px;'>

        <h1>".$v." ) ".$var2."</h1>


        <h3>  ".$var."</h3>
          <br>
          ".$var3."
          <br>
          <br>
        <b>  Claps  :</b>".$var4."
          </div>
<br>
          </body>");
$v=$v+1;

        }
      }
}
else {
  header('Location:bloggers_login.php');
}
 ?>
