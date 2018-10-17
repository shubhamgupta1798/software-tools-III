
<html>

<head>

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
    height:30px;
  	width:100px;
    border-radius: 5px;
    border-style:ridge;
    margin-left: 10px;
    margin-top: 5px;

  }
  button.c2:hover{
  	background-color:#dbfaff;
  	color:black;
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
    height:50%;
    float:left;

  }
  div.part2{
    width:75%;
    float:right;
    height:50%;

  }
  div.part3{
    width:100%;
    height:20%;

    position: fixed;

  bottom: 0;

  }

  body{
    background-image: linear-gradient(to bottom right,#646972, #d5dff2);
  }
  </style>
  <script>
  function setURL(url){
    document.getElementById('iframe_a').src = url;
}
  </script>
</head>
<body>
  <div class="heading1"><h1>STUDENT REGISTRATION DATA</h1></div>

<hr>
<hr>  <br>
  <br>


  <form method="POST">

  <div>
  <div class="part1" id="div1" name="div1">
  <button class="c2"  TYPE="BUTTON" onclick="setURL('input.php')">INPUT</button>
  <br><br>
  <button class="c2" TYPE="BUTTON"  onclick="setURL('delete.php')">DELETE</button>

  <br><br>

  <button class="c2" TYPE="BUTTON" onclick="setURL('update.php')" >UPDATE</BUTTON>

  <br><br>

  <button class="c2" TYPE="BUTTON" name="display" onclick="setURL('disp.php')">DISPLAY</BUTTON>
  </DIV>
  <div class="part2" id="div2" name="div2">
  <iframe  height="100%" width="100%" src="" name="iframe_a" id="iframe_a" >
  </div>
  </div>
</form>
</body>
</html>
<?php



?>
