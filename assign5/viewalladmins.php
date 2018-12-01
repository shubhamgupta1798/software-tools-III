
<?php

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
  $sql = "SELECT name,valid FROM admin where valid=1";
  $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       // output data of each row

ECHO"<html><head><style>body{color:#e5e5e5;}</style><body><H2>ADMIN'S NAME</H2><BR><Ol>";
       while($row = $result->fetch_assoc()) {
              if($row["valid"]==1)
           echo "<li><SPAN STYLE='margin-left:20px;'> " . $row["name"].  " </span></li><br>";
       }
       echo"</Ol>";





}}

?>
