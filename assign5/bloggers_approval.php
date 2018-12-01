
<?php
$v1=0;
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
  $sql = "SELECT name,valid FROM blogger";
  $result = $conn->query($sql);

$v2=100;
   if ($result->num_rows > 0) {


ECHO"<html><head><style>body{color:#e5e5e5;}</style><script type='text/javascript'>
function fn(clicked_id){
    document.getElementById('fix').innerHTML = clicked_id;
    return;
}
</script>
<body><H2>BLOGGERS APPROVAL NAME</H2><BR><form method='POST'><Ol><input type='hidden'  name='fix' id='fix'><table>";
       while($row = $result->fetch_assoc()) {
         $v1=$v1+1;
         $v2=$v2+1;
              if($row["valid"]==0)
           echo "<tr><td><li><SPAN STYLE='margin-left:20px;'> " . $row["name"].  "</td><td> <input type='hidden' name=".$v2." value=".$row["name"]." id=".$v2."></td><td><button type='submit' style='background-color:GREEN;color:white' name='id' value=".$v1.">APPROVE</button></td><td><button type='submit' style='background-color:red;color:white' name='id1' value=".$v1.">REMOVE</button></td><tr></span></li>";
       }
       echo"</Ol></FORM></body></html>";





}}
if(isset($_POST["id"]))
{


  $c1=$_POST["id"];
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT username FROM blogger";
  $result = $conn->query($sql);


   while ($row = $result->fetch_assoc()) {
     if($c1==1)
     {

       $d=$row["username"];
       echo($d);
       $sql = "UPDATE blogger SET valid='1' WHERE username='$d'";
       $result1 = $conn->query($sql);
       echo($result1);

  header('Location:admin_approve.php');
     }
$c1=$c1-1;
   }
}
if(isset($_POST["id1"]))
{


  $c1=$_POST["id1"];
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT username FROM blogger";
  $result = $conn->query($sql);


   while ($row = $result->fetch_assoc()) {
     if($c1==1)
     {

       $d=$row["username"];
       echo($d);
       $sql = "UPDATE blogger SET valid='-1' WHERE username='$d'";
       $result1 = $conn->query($sql);
       echo($result1);

  header('Location:bloggers_approval.php');
     }
$c1=$c1-1;
   }
}

?>
