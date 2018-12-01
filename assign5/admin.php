
<html>

<head>
<link rel="stylesheet" href="stylesheet.css">
  <style>
  input.c5{
    width:70%;
    float:right;

       border-radius: 5px;
      outline:0;
      line-height:25px;
  }
  div.c1{
    border-style: ridge;
     border-radius: 5px;

     line-height:30px;
  }
  textarea{
    width:80%;
    float:right;
    border-style: inset;
    border-width: medium;

       border-radius: 5px;
      outline:0;
  }
  div.c2{
    padding-left: 10px;
  }
  input.c6{
      width:25%;
      float:right;
      margin-right:50%;
      border-radius: 5px;
     outline:0;
     line-height:25px;
  }

  div.heading1{
  width:100%;
  text-align:center;

  padding-top: 15px;
  line-height:wrapText;

  }
  button.c2{
    height:40px;
    width: 100%;
    border-radius: 5px;
    border-style:ridge;


  }

  div.heading{
  width:100%;
  padding-left: 20px;
  line-height:wrapText;
   background-color:#abb7cc;
  }
  div.heading2{
  width:100%;

  line-height:wrapText;
   background-color:#abb7cc;
   text-align:right;
  }
  div.part1{
    width:20%;
    height:80%;
    float:left;

  }
  div.part2{
    width:75%;
    float:right;
    height:80%;

  }



  </style>
  <script>
  function setURL(url){
    document.getElementById('iframe_a').src = url;
}
  </script>
</head>
<body>

  <div class="heading1"><a href="logout.php" style='float:right;margin-right:20px;background-color:#a0995d80;color: #000000;border:0.5px solid;border-color:#a73333;;padding:3px;'>LogOut</a><h1>ADMIN PANNEL</h1></div>


<hr>  <br>
  <br>


  <form method="POST">

  <div>
  <div class="part1" id="div1" name="div1">
  <button class="c2"  TYPE="BUTTON" onclick="setURL('bloggers_approval.php')">APPROVE BLOGGERS</button>

    <button class="c2" TYPE="BUTTON" onclick="setURL('admin_approve.php')" >APPROVE ADMIN REQUEST</BUTTON>

  <button class="c2" TYPE="BUTTON"  onclick="setURL('viewallbloggers.php')">VIEW ALL BLOGGERS</button>





  <button class="c2" TYPE="BUTTON" name="display" onclick="setURL('viewalladmins.php')">VIEW ALL ADMINS</BUTTON>
    <button class="c2" TYPE="BUTTON" name="display" onclick="setURL('viewallrejectedadmins.php')">REJECTED ADMINS</BUTTON>
      <button class="c2" TYPE="BUTTON" name="display" onclick="setURL('viewallrejectedbloggers.php')">REJECTED BLOGGERS</BUTTON>

          <button class="c2" TYPE="BUTTON" onclick="setURL('removecurrentadmin.php')" >REMOVE CURRENT ADMIN</BUTTON>

              <button class="c2" TYPE="BUTTON" onclick="setURL('removecurrentblogger.php')" >REMOVE CURRENT BLOGGER</BUTTON>

  </DIV>
  <div class="part2" id="div2" name="div2">
  <iframe  height="100%" width="100%" src="" style="border:0px;" name="iframe_a" id="iframe_a" >
  </div>
  </div>
</form>
</body>
</html>
<?php



?>
