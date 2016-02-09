<?php
include("connect.php");
$sql = "ALTER TABLE answer ADD praise int(10) NOT NULL DEFAULT '0'";
if (mysql_query($sql)) {
  die("mysql error" . mysql_error());
}
 ?>
