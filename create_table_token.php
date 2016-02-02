<?php
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
  die('could not connect' . mysql_error());
}
mysqli_select_db("zhishu_db",$con);
$sql = "CREATE TABLE token
(
  token varchar(64) DEFAULT NULL;
  userId int(11) NOT NULL;
) ENGINE=MyISAM DEFAULT CHARSET=utf8";
mysql_query($sql,$con);
mysql_close($con);
 ?>
