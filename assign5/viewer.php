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
  $sql2= "SELECT username from blogger where valid=1";
  $result6=$conn->query($sql);
  $result7=$conn->query($sql2);
  $data='';
  if ($result6->num_rows > 0) {


      while($row = $result6->fetch_assoc()) {

        $data1=$row["title"].',';
        $data=$data.$data1;



      }
    }
    if ($result7->num_rows > 0) {


        while($row = $result7->fetch_assoc()) {

          $data1=$row["username"].',';
          $data=$data.$data1;



        }
      }

    $result = $conn->query($sql);
    $v=1;
    ?>
    <html>
    <head>
      <script type="text/javascript">
      function fn1(id1)
      {
      var x=  document.getElementById(id1).value;
      var modal = document.getElementById(x);
    modal.style.display = 'block';


      }
      function close1(id1)
      {
      var x=  document.getElementById(id1).value;

      var modal = document.getElementById(x);
    modal.style.display = 'none';


      }
      </script>
      <style>
      .c1{
        display:none;
        height:50%;
        margin-top:15%;
        margin-left:20%;
        left: 0;
    top: 0;
        width:50%;

   position: fixed;
   z-index: 1;

   overflow: auto;
     background: url("images/12.jpg");
     background-repeat: no-repeat;
    background-size: 100%;
   color:white;
      }
      input.c5{
        width:30%;



           border-radius: 5px;
          outline:0;
          line-height:25px;
      }
      button.c7{





        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
        height:25px;
      	width:90px;
        font-size: 12;


      }
      button.c7:hover{
      	background-color:#1f441b;
      	color:black;
      	}
      body{
        background: url("images/11.jpeg");
        background-attachment: fixed;
       background-size: 100%;
     background-repeat: repeat-y;
      }
      .autocomplete {
        position: relative;
        display: inline-block;
      }

      input.c11,input.c10 {
        border: 1px solid transparent;
        background-color: #f1f1f1;
        padding: 10px;
        font-size: 16px;
      }

      input.c10 {
        background-color: #f1f1f1;
        width: 100%;
      }

      input.c11 {
        background-color: DodgerBlue;
        color: #fff;
        cursor: pointer;
      }

      .autocomplete-items {
        position: absolute;
        border: 1px solid #d4d4d4;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        top: 100%;
        left: 0;
        right: 0;
      }

      .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #d4d4d4;
      }

      .autocomplete-items div:hover {

        background-color: #e9e9e9;
      }

      .autocomplete-active {

        background-color: DodgerBlue !important;
        color: #ffffff;
      }
      </style>
</head>
    <body>

      <div style='height:8%;width:100%;position: fixed;top: 10;'>
      <i><a href='user.php'><span style='font-family:Lment-v02;font-size:40px;background-color:#2d271b6b;color:#ffb1b1;text-decoration: underline;text-decoration-color: white;' >BLOGGER</span></i></a>
      <form method='post' autocomplete="off" style='float:right;margin-right:20px;'>
        <div class="autocomplete" style="width:300px;">
          <input  class='c10' id="myInput" type="text" name="myinput" placeholder="User or Blog Name">
        </div>
        <input class='c11' type="submit" value='Search' name='search'>
      </form>
</div>

<br>
<br>
<script>
function autocomplete(inp, arr) {
var currentFocus;
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      this.parentNode.appendChild(a);
      for (i = 0; i < arr.length; i++) {
      if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var str="<?php echo($data);?>";

var res = str.split(",");

/*An array containing all the country names in the world:*/
var countries = res;

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
</script>



<?php
    if ($result->num_rows > 0) {


        while($row = $result->fetch_assoc()) {
          $var2=$row["title"];
          $var3=$row["content"];
          $var4=$row["new_likes"];
          $var=$row["blog"];
$var1=$row["blogger"];
$var5=$row["new_comment"];

?>

<div style='margin-left:13%;'>
  <div style='width:80%;background-color:#b3a1a1bd;color:#000000;padding-left:10px;padding-bottom:5px;'>
<?php echo('<h2>');echo($v);echo(')');
   echo($var2); echo('</h2>'); ?>


  <h3>By-

 <button   value="<?php echo($v);?>" style='font-size : 20px;background:none;border:none;' id='userdetails<?php echo($v);?>' onclick='fn1(this.id)' >
<?php   echo($var1);
  ?></h3>
</button>
  <?php
  $u=$var1;
  if($u<>''){
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname="assign5";

    $conn2 = new mysqli($servername, $username, $password, $dbname);

    if ($conn2->connect_error) {
      die("Connection failed: " . $conn2->connect_error);
    }
    $sql1 = "SELECT * FROM blogger where username='$u'";
    $result2 = $conn->query($sql1);
   if ($result2->num_rows > 0) {
      ?>
  <?php
   while($row2 = $result2->fetch_assoc()) {
   echo"<div class='c1' id='".$v."'>";
           ?>
           <button  style='float:right;height:20px;width:30px;background:none;border:none;' value="<?php echo($v);?>"  id='user2<?php echo($v);?>' onclick='close1(this.id)' >
        <image src='images/15.png' style='height:15px;width:15px;background-size:100%'></button>
           <div style="width:50%;height:40%;background-color: #3c3c3e82;;color:white;margin-left:23%;margin-top:28%;">





  <H2>BLOGGERS INFORMATION</H2>   <li> NAME     :<?php echo($row2["name"]);?><br>
            <li>   USERNAME     :<?php echo($row2["username"]);?><br>
      <li>      Email    :<?php echo($row2["email"]);?><br>
          </div>
        </div>
           <?php
               }
     echo"</ul>";

  }
  ?>
  </h3>

  <B>DISPCRIPTION: </B><?php echo($var);?>
    <br>
    <BR>
  <?php echo($var3);?>

<br>

<form method="POST">
  <input type='hidden' value='<?php echo($var2)?>' name='title'>
  <input type='hidden' value='<?php echo($var5)?>' name='initial_comment'>
    <input type='hidden' value='<?php echo($var4)?>' name='likes'>
<button style='background:none;border:none;' type='submit' value='1' name='like'><image src='images/clap2.png' style=' height:50px;width:50px;background:none;'></button>
<input placeholder="Enter your comments here..." class='c5' type='text' name='comment'>
<button class='c7' type='submit' value='3' name='comment1'>Comment</button>
</form>
</div>
<?php
$v=$v+1;
}
?>
</div>
<?php
}
}
if(isset($_POST['search']))
{
  $c=$_POST['myinput'];
  $_SESSION['myinput']=$c;

  echo "<script type='text/javascript'>window.top.location='view_info.php';</script>"; exit;

}
if(isset($_POST['like']))
{
  $li=$_POST['likes'];
echo($_POST['like']);
  $t=$_POST['title'];

$li=$li+1;
$sql = "UPDATE blogs SET new_likes='$li' WHERE title='$t'";
$result1 = $conn->query($sql);
}
if(isset($_POST['comment1'])){
  $comment=$_POST['comment'].'\n';

  $comment2=$_POST['initial_comment'];
  $comment2=$comment2.'\n';

  $comment=$comment2.$comment;
echo($_POST['comment1']);
  $t=$_POST['title'];
  $sql = "UPDATE blogs SET new_comment='$comment' WHERE title='$t'";
  $result1 = $conn->query($sql);
}
?>

</body>
</html>
