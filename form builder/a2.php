<?php
session_start();

echo'
<HTML>
<head>
<style>
h3 {
    margin-top: 20px;
    font-size:25px;
    font-style:italic;
        color: maroon;
}
body {
    background-color: linen;
}
span{
  margin-top: 25px;
  font-size:20px;
font-family:TIMES;
      color: maroon;
}
input{
  font-size:20px;

  border-radius:7px;
  border-width:thin;
  border-color:maroon;
   border: 1px solid;

}
select{
  font-size:20px;
}
form{
  margin-left:20px;
}
</style>
</head>
<BODY>
<H3>SELECT STYLE FOR PAGE</H3>
<hr>
<form action="a3.php" method="POST">
<pre><span>FORM NAME:                     <input type="text" name="fname" id="fname"><br><br></span>
<span>HEADING COLOR:            <INPUT type="color" name="hcolor" id="hcolor"><br> <br></span>

<span>HEADING SIZE:                 <input type="number" name="h1size" id="h1size"><br><br></span>
<span>HEADING STYLE:              <select name="hstyle">
  <option value="Arial">Arial</option>
  <option value="Helvetica">Helvetica</option>
  <option value="Times">Times</option>

</select><br><br></span>
<span>TEXT COLOR:                    <INPUT type="color" name="t1color" id="t1color"><br> <br></span>

<span>TEXT SIZE:                         <input type="number" name="fsize" id="fsize"><br><br></span>

<span>TEXT STYLE:                      <select name="tstyle">
  <option value="Arial">Arial</option>
  <option value="Helvetica">Helvetica</option>
  <option value="Times">Times</option>

</select><br><br></span>

<span>BACKGROUND COLOR:    <input type="color" name="bcolor" id="bcolor"><br><br></span>
 <input type="submit" value="Submit">
</pre>

</form>
</BODY>
</HTML>

';
 ?>
