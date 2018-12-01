<?php

session_start();
$u=$_SESSION["username_signedin"];
if($u<>'')
{
  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname="assign5";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * FROM blogs where blogger='$u'";
    $result = $conn->query($sql);
    $v=1;
    if ($result->num_rows > 0) {

      ?>
      <table cellpadding="10" cellspacing='10' style='border: 1px solid black;background-color:#8787d280;'>
        <tr>
          <th> BLOGS WITH ADDITIONAL CLAPS </Th>
            <Th> LIKES</Th>
              <?PHP
        while($row = $result->fetch_assoc()) {
          $var2=$row["title"];
          $var3=$row["content"];
          $var4=$row["likes"];
          $var5=$row["new_likes"];
          $var6=$row["blog"];

          if($var4<>$var5){
            $v3=$var5-$var4;
            $sql1 = "UPDATE blogs SET likes='$var5' WHERE title='$var2'";
              $result2 = $conn->query($sql1);
          ?>
          <div style='background-color:#b5b5eab3;'>
            <TR>
              <Td>
          <?php echo($var2);?>
</Td>
<Td>
            <?php echo($v3);?>
          </Td>

        </div>
      </Td>

          <?php

}}
      }
      echo("</table>");
      $result->free();
      $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          echo("<table cellpadding='10' cellspacing='10' style='border: 1px solid black;background-color:#8787d280;'>
            <tr>
              <th> BLOGS WITH NEW COMMENTS </Th>
                <Th> COMMENTS</Th>");
      while(($row2 = $result->fetch_assoc())!== null ){
        $var2=$row2["title"];
        $var3=$row2["content"];
        $var4=$row2["comment"];

        $var5=$row2["new_comment"];
        $var6=$row2["blog"];

        if($var5<>''){
        //  $v3=$var5-$var4;
          $v=$var4;
          $v=$v.$var5;
          $sql1 = "UPDATE blogs SET comment='$v' WHERE title='$var2'";
            $result2 = $conn->query($sql1);
            $v='';
            $sql1 = "UPDATE blogs SET new_comment='$v' WHERE title='$var2'";
              $result2 = $conn->query($sql1);
        ?>
        <div style='background-color:#b5b5eab3;'>
          <TR>
            <Td>
        <?php echo($var2);?>
</Td>
<Td>
          <?php echo($var5);?>
        </Td>

      </div>
    </Td>

        <?php

}}


}}
else {
  header('Location:bloggers_login.php');
}
 ?>
