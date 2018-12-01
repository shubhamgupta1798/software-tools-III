
<?php
session_start();
$u=$_SESSION["username_signedin"];
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
  $sql = "SELECT * FROM blogger where username='$u'";
  $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       // output data of each row
ECHO"<html><head><style>body{color:#e5e5e5;}</style><body><H2>BLOGGERS INFORMATION</H2><BR><ul>";
       while($row = $result->fetch_assoc()) {
           echo "<li> NAME     :     " . $row["name"]. "<BR> USERNAME:   ".$row["username"]."<BR>EMAIL    :    ".$row["email"]. " </li><br>";
       }
       echo"</ul>";





}}

?>
