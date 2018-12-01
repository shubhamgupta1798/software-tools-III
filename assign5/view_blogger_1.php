<?php

session_start();

  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM blogs";
    $result = $conn->query($sql);
    $v=1;
    echo"<html>
    <head><style>
      body{
        background-image: url('try2.png');
        background-repeat: no-repeat;
       background-size: 100%;
       background-color: #8d97af;
color: #000000;
      }
      div.c4{
        height:50%;
        margin-top:15%;
        margin-left:20%;
        left: 0;
    top: 0;
        background-color:green;
        width:50%;

   position: fixed;
   z-index: 1;


   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.8); /* B
      }
    </style>
    <script type='text/javascript'>
    function fn()
    {
      alert('hellr');
    }

function fb2()
{
  var modal = document.getElementById('c1');
modal.style.display = 'none';
  }
  function fb3()
  {
    var modal = document.getElementById('c1');
  modal.style.display = 'block';
  window.location.href='viewall_viewer.php';
    }


    </script>
    </head><body>
    <div class='c4' id='c1'>
    <button id='a1' onclick='fb2()'>
    </button>
    	<iframe id='f1' style='width:100%;height:100%;border-radius: 10px;'  src='blogger_profile.php' > </iframe>
    </div>

    ";
    if ($result->num_rows > 0) {
        // output data of each row

        while($row = $result->fetch_assoc()) {
          $var2=$row["title"];
          $var3=$row["content"];
          $var4=$row["likes"];
          $var=$row["blog"];
$var1=$row["blogger"];
          echo"
          <form method='POST'>
<br>

        <h2>".$v." ) ".$var2."</h2>
    <button value=".$var1." onclick='fb3()' style='background:transparent;border:0px;' name='user' type='submit' >    <H2>By-".$var1."</h2></button>

        <h3>Discription: ".$var."</h3>
          <br>
          ".$var3."
          <br>
          <button value=".$var4." name='likes' type='submit'>
          </button>
          <br>

          </form>

<br>

          ";
$v=$v+1;
        }}
        echo("</body>");
        if(isset($_POST['user']))
        {
          $u=$_POST['user'];
$_SESSION["gotouserprofile"]=$u;

header('Location:view_blogger_1.php');


        }
        if(isset($_POST['likes']))
        {
          $li=$_POST['likes'];
          echo($li);
          
        }


 ?>
