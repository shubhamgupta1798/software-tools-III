<html><head>
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
    height:50px;
  	width:100%;
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
    height:90%;
    float:left;

  }
  div.part2{
    width:77%;
    float:right;
    height:90%;

  }
  div.part3{
    width:100%;
    height:20%;

    position: fixed;

  bottom: 0;

  }
  body{
      background-image: url("blogger.jpeg");
      background-repeat: no-repeat;
     background-size: 100%;
  }

  </style>
  <script>
  function setURL(url){
    document.getElementById('iframe_a').src = url;
}
  </script>
</head>
<body style="  margin: 0;        font-family: sans-serif;">

  <div class="heading1">  <a href="logout.php" style='float:right;margin-right:20px;background-color:#b0b9819e;color: #c30000;border:0.5px solid;border-color:black;padding:3px;'>LogOut</a><h1>BLOGGER'S  PANEL</h1>
  </div>



<hr>


  <form method="POST">

  <div>
  <div class="part1" id="div1" name="div1">
  <button class="c2" type="BUTTON" onclick="setURL('writeablog.php')">WRITE A BLOG</button>
  <br>
  <button class="c2" type="BUTTON" onclick="setURL('viewallblogswritten.php')">VIEW ALL BLOG WRITTEN</button>

  <br>

  <button class="c2" type="BUTTON" onclick="setURL('bloggers_personalinfo.php')">PERSONAL INFORMATION</button>

  <br>

  <button class="c2" type="BUTTON" name="display" onclick="setURL('likesandcomment.php')">NEW CLAPS AND COMMENTS</button>
  </div>
  <div class="part2" id="div2" name="div2">
  <iframe height="100%" width="100%" src="bloggers_personalinfo.php" name="iframe_a" id="iframe_a" style="
    border: 0px solid #9a9a9a;
">
  </div>
  </div>
</form>
</body>
</html>
</iframe></div></div></form></body></html>
