<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname="assign3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT addno,firstname,lastname,email,sem FROM registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo "Admission No: " . $row["addno"]. " <br> Name: " . $row["firstname"]. " " . $row["lastname"]."<br> Email: ".$row["email"]."<br> Semester: ".$row["sem"]. " <br>";
    }
} else {
    echo "NO RESULTS";
}
$conn->close();
?>
