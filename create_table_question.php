<?php
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
  die("could not connect :". mysql_error());
}
mysql_select_db("zhishu_db",$con);
$sql = "CREATE TABLE question(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY(id),
  answerCount int(2) DEFAULT '0',
  title varchar(255) NOT NULL,
  content varchar(255) NOT NULL,
  data timestamp DEFAULT '0000-00-00 00:00:00',
  bestAnswerId int(11) DEFAULT NULL,
  authorId int(11) DEFAULT NULL
)ENGINE=MyISAM DEFAULT CHARSET=utf8";
mysql_query($sql,$con);
mysql_close($con);
 ?>
