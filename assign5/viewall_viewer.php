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
  $sql = "SELECT * FROM blogs";
    $result = $conn->query($sql);
    $v=1;
    echo"<html>
    <head><style>
      body{
        background-image: url('try2.png');

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

display:none;
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
    }


function comment()
{
  alert('hi');
  var x = document.getElementById('comment').value;

}
document.getElementById('comment').onclick = function() {myFunction()};



function myFunction() {
  alert('hi');
    var x = document.getElementById('comment').value;

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
          <div id=".$var2.">
<br>

        <h2>".$v." ) ".$var2."</h2>

    <button value=".$var1." onclick='fb3()' style='background:transparent;border:0px;' name='user' type='submit' >    <H2>By-".$var1."</h2></button>
<input type='hidden' name='i1' id='i1' value='".$var2."'>
        <h3>Discription: ".$var."</h3>
          <br>
          ".$var3."
          <br>
          <button value=".$var4."  name='likes' type='submit'>
          </button>
          <br>
          <button  value='".$var2."' id='comment' ></button>

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

          $t=$_POST['i1'];

        $li=$li+1;
        $sql = "UPDATE blogs SET likes='$li' WHERE title='$t'";
       $result1 = $conn->query($sql);


        }


 ?>
