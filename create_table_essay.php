<?php
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
  die("mysql connect failure:".mysql_error());
}
mysql_select_db("zhishu_db",$con);
$sql = "CREATE TABLE essay(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id),
  title varchar(255) NOT NULL,
  content varchar(1000) NOT NULL,
  authorId int(10) NOT NULL,
  isPrivate int(1) DEFAULT 1,
  data timestamp DEFAULT '0000-00-00 00:00:00'
)ENGINE=MyISAM DEFAULT CHARSET=utf8";
mysql_query($sql);
mysql_close($con);
 ?>
