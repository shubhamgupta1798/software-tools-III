<?php
session_start();
$color1=$_POST['bcolor'];
$fname=$_POST['fname'];
$hsize=$_POST['h1size'];
$hstyle=$_POST['hstyle'];
$hcolor=$_POST['hcolor'];
$tcolor=$_POST['t1color'];
$tsize=$_POST['fsize'];
$tstyle=$_POST['tstyle'];
$var=1;

$_SESSION['bcolor']=$color1;
$_SESSION['fname']=$fname;
$_SESSION['hsize']=$hsize;
$_SESSION['hstyle']=$hstyle;
$_SESSION['hcolor']=$hcolor;
$_SESSION['tcolor']=$tcolor;
$_SESSION['tsize']=$tsize;
$_SESSION['tstyle']=$tstyle;

echo'
<html>
<head>
<style>
.d1{
  float: left;
  width:40%;
  height:95%;
background-color:'.$color1.';
padding-left:10px;
}
.d2{

  float:right;
  width:59%;
height:95%;
  background-color:'.$color1.';


}
input{
  font-size:'.$tsize.';

  border-radius:7px;
  border-width:thin;
  border-color:maroon;
   border: 1px solid;

}
BUTTON{
  border-radius:7px;
  border-width:thin;
   border: 1px solid;
}
body{
  background-color:BLACK;
}
</style>
<script language="javascript">
var x=1;
function fb()
{
  var element = document.createElement("input");

  	element.setAttribute("type","hidden");
    element.setAttribute("name","var1");
    element.value=x;
    var area2 = document.getElementById("d2");
    	area2.appendChild(element);
}
function fn1(){
  x++;
  var element = document.createElement("input");

  	element.setAttribute("type","text");
    element.value="field name";
    element.setAttribute("id",x);
    element.setAttribute("name",x);
    element.style.color="'.$tcolor.'";
    element.style.fontSize = '.$tsize.';
    var area2 = document.getElementById("d2");
    	area2.appendChild(element);
      x++;

  var element1 = document.createElement("input");

  	element1.setAttribute("type","text");
    element1.value="enter text";
    element1.setAttribute("id",x);
    element1.setAttribute("name",x);
    element1.style.color="'.$tcolor.'";
    element1.style.fontSize = '.$tsize.';

var br = document.createElement("br");
  	area2.appendChild(element1);
    area2.appendChild(br);

    localStorage.setItem("storageName",x);


}
function fn2(){
  x++;
  var element = document.createElement("input");

    element.setAttribute("type","text");
    element.value="field name";
    element.setAttribute("id",x);
      element.setAttribute("name",x);
    element.style.color="'.$tcolor.'";
    element.style.fontSize = '.$tsize.';
    var area2 = document.getElementById("d2");
      area2.appendChild(element);
      x++;
  var element = document.createElement("input");

  	element.setAttribute("type","NUMBER");

    element.setAttribute("id",x);
    element.value="0";
      element.setAttribute("name",x);
    element.style.fontSize = '.$tsize.';
    element.style.color="'.$tcolor.'";
  	var area2 = document.getElementById("d2");
var br = document.createElement("br");
  	area2.appendChild(element);
    area2.appendChild(br);
 localStorage.setItem("storageName",x);

}
function fn3(){
  x++;
  var element = document.createElement("input");

    element.setAttribute("type","text");
    element.value="field name";
    element.setAttribute("id",x);
      element.setAttribute("name",x);
    element.style.color="'.$tcolor.'";
    element.style.fontSize = '.$tsize.';
    var area2 = document.getElementById("d2");
      area2.appendChild(element);
      x++;
  var element = document.createElement("input");

  	element.setAttribute("type","email");
    element.value="abc@xyz.com";
    element.setAttribute("id",x);
      element.setAttribute("name",x);
    element.style.color="'.$tcolor.'";
    element.style.fontSize = '.$tsize.';
  	var area2 = document.getElementById("d2");
var br = document.createElement("br");
  	area2.appendChild(element);
    area2.appendChild(br);
    localStorage.setItem("storageName",x);


}
function fn4(){
  x++;
  var element = document.createElement("input");

    element.setAttribute("type","text");
    element.value="field name";
    element.setAttribute("id",x);
      element.setAttribute("name",x);
    element.style.color="'.$tcolor.'";
    element.style.fontSize = '.$tsize.';
    var area2 = document.getElementById("d2");
      area2.appendChild(element);
      x++;
  var element = document.createElement("input");

  	element.setAttribute("type","password");
    element.value="password";
    element.setAttribute("id",x);
      element.setAttribute("name",x);
    element.style.fontSize = '.$tsize.';
    element.style.color="'.$tcolor.'";
  	var area2 = document.getElementById("d2");
var br = document.createElement("br");
  	area2.appendChild(element);
    area2.appendChild(br);

    localStorage.setItem("storageName",x);

}

function fn5()
{
x++;
var element = document.createElement("input");

  element.setAttribute("type","text");

  element.setAttribute("id",x);
  element.setAttribute("name",x);
  element.style.color="'.$tcolor.'";
  element.style.fontSize = '.$tsize.';
  var area2 = document.getElementById("d2");
  area2.appendChild(element);
  x++;
  var element = document.createElement("input");

  	element.setAttribute("type","hidden");
    element.setAttribute("name",x);
    element.value="radio";
    var area2 = document.getElementById("d2");
    	area2.appendChild(element);
var radioYes = document.createElement("input");
radioYes.setAttribute("type", "radio");
radioYes.style.fontSize = '.$tsize.';
radioYes.setAttribute("id", "radioYes" + x);


radioYes.setAttribute("name", "Boolean1" + x);
var lblYes = document.createElement("lable");
var textYes = document.createTextNode("Yes");

lblYes.appendChild(textYes);
area2.appendChild(radioYes);
area2.appendChild(lblYes);
var space = document.createElement("span");
space.setAttribute("innerHTML", "&nbsp;&nbsp");
area2.appendChild(space);
var radioNo = document.createElement("input");
radioNo.setAttribute("type", "radio");

radioNo.setAttribute("id", "radioNo2" + x);
radioNo.style.fontSize = '.$tsize.';
radioNo.setAttribute("name", "Boolean" + x);
var lblNo = document.createElement("label");
lblNo.innerHTML =  "No";
area2.appendChild(radioNo);
area2.appendChild(lblNo);
var spaceBr= document.createElement("br");
area2.appendChild(spaceBr);

localStorage.setItem("storageName",x);


}
</script>
</head>
<body>

<div class="d1" id="d1" name="d2">
<BR><BR>
<button onclick="fn1()" style="font-size:20px;">TEXT</button><BR><BR>
<button onclick="fn2()" style="font-size:20px;">NUMBER</button><BR><BR>
<button onclick="fn3()" style="font-size:20px;">EMAIL</button><BR><BR>
<button onclick="fn4()" style="font-size:20px;">PASSWORD</button><BR><BR>
<button onclick="fn5()" style="font-size:20px;">RADIO BUTTON</button><BR><BR>



</div>
<form action="a6.php" method="POST">
<div class="d2" id="d2" name="d2">
<center>
<span id="heading" name="heading" style="font-size:'.$hsize.';font-family:'.$hstyle.';color:'.$hcolor.'">
'.$fname.'
</span>
<HR>
</center>
<br>
<br>
</div>

<input type="submit" onclick="fb()" value="Submit">
</form>

</body>
</html>o

';
?>
