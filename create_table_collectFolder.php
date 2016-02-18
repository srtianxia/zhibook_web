<?php
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
  die("could not connect:".mysql_error());
}
mysql_select_db("zhishu_db",$con);
$sql = "CREATE TABLE collectFolder(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id),
  folder varchar(256) NOT NULL,
  userId int(10) NOT NULL
)ENGINE=MyISAM DEFAULT CHARSET=utf8";
mysql_query($sql,$con);
mysql_close($con);
 ?>
