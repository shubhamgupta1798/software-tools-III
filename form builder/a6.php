<?php
session_start();
$var=$_POST['var1'];
$color1=$_SESSION['bcolor'];
$fname=$_SESSION['fname'];
$hsize=$_SESSION['hsize'];
$hstyle=$_SESSION['hstyle'];
$hcolor=$_SESSION['hcolor'];
$tcolor=$_SESSION['tcolor'];
$tsize=$_SESSION['tsize'];
$tstyle=$_SESSION['tstyle'];
echo'<html>
<style>
body{
    background-color:'.$color1.';
}
input{
  font-size:'.$tsize.';

  border-radius:7px;
  border-width:thin;
  border-color:maroon;
   border: 1px solid;

}
table{
  font-size:'.$tsize.';
  font-family:'.$tstyle.';
  color:'.$tcolor.'
}
</style>
<body>
<center>
<span id="heading" name="heading" style="font-size:'.$hsize.';font-family:'.$hstyle.';color:'.$hcolor.'">
'.$fname.'
</span>
</center>
<br>
<hr>


';

ECHO'<form method="post" action="a7.php">
<table>';
for($i=2;$i<$var;$i=$i+2){
  $s=$_POST["$i"];
  $c=$i+1;
  $p=$_POST["$c"];

  echo '

  <span  style="font-size:'.$tsize.';font-family:'.$tstyle.';color:'.$tcolor.'">

  <TR>
  <TH>
  '.$s.'</TH>

  ';

  if($p=="enter text")
  {
    echo'<TH><input type="text" id="text1"></TH></tr>';
  }
  else if($p=="0")
  {
    echo'<TH><input type="number" id="n1"></th></tr>';
  }
  else if($p=="password")
  {
    echo('<TH><input type="password" id="n1"></th></tr>');
  }
  else if($p=="abc@xyz.com")
  {
    echo('<TH><input type="email" id="n1"></th></tr>');
  }
  else {
    echo('<TH><input type="radio" id="n1" >Yes   <INPUT type="radio"  name="select1">No<br>
    </th></tr> </span>');
  }

if($i==$var-1)
{
  echo('</table><input type="submit" onclick="fb()" value="Submit">');
}
}
echo'


</form>

</body>
</html>';





?>
