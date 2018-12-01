<?php
session_start();
session_destroy();
header("location:/assign5/user.php");
exit();
?>
