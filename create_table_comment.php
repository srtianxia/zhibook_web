<?php
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
  die("mysql_connect failure : " . mysql_error());
}
mysql_select_db("zhishu_db",$con);
$sql = "CREATE TABLE comment(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id),
  content varchar(1000) DEFAULT NULL,
  data timestamp DEFAULT '0000-00-00 00:00:00',
  authorId int(10) NOT NULL,
)"
 ?>
