<?php
$con = mysql_connect("YOURSErVEr","YOURLOGIN","YOURPASS");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("YOURDATABASE", $con);
?>