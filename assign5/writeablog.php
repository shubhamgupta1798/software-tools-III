
<?php
session_start();
$u=$_SESSION["username_signedin"];
if($u<>''){
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT valid FROM blogger where username='$u'";
  $result = $conn->query($sql);
$var=0;
   if ($result->num_rows > 0) {
       // output data of each row

       while($row = $result->fetch_assoc()) {
         $var=$row["valid"];
               }

       if($var==0)
       {
         echo("<br><br><br><h2><center>YOU  HAVE NOT BEEN APPROVED BY THE ADMIN. YOU MAY BE APPROVED SOON!!</h2></center>");

       }
       else if($var==-1)
       {
         echo("<br><br><br><h2><center>YOU HAVE BEEN DENIED ACCESS BY THE ADMIN.</h2></center>");
       }
       else {

         echo'
         <html>
         <head>
        <link rel="stylesheet" href="stylesheet.css">
        <style>
        textarea{
          height:200px;
          width:75%;
        }
        body{
          background:transparent;
        }
        </style>
        </head>
        <body>
        <form method="POST">
        <div>
        Title:<input type="text" class="c6" name="title" required>
        <br>
        <br>
        Short discription:<input type="text" class="c6" name="disc" required>
        <br>
        <br>
        Content:<textarea name="content" cols="25" rows="5" required></textarea>
        <br>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <CENTER><button type="submit" name="submit" class="c3">SUBMIT</button></center>
        </form>
        </body>
        </html>



         ';
         if(isset($_POST['submit']))
         {
           echo("hi");
           $title=$_POST['title'];

           $disc=$_POST['disc'];

           $content=$_POST['content'];

           $con=mysqli_connect("localhost","root","") or die("can't connect");
           if(!mysqli_select_db($con,"assign5")){
             mysqli_query($con,"CREATE DATABASE assign5");
             mysqli_select_db($con,"ass5");
           }
           $query = mysqli_query($con,"INSERT INTO blogs(blog,title,content,blogger) values('$disc','$title','$content','$u')") or die("ENTER OTHER USERNAME");

         }

       }






}}
else{
  header('Location:bloggers_login.php');
}

?>
