<?php
//未测试 ！！！
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
  die("could not connect:".mysql_error());
}
$sql = "CREATE TABLE answer
(
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  authorId int(10) NOT NULL,
  questionId int(10) NOT NULL,
  content varchar(1000) not NULL,
  data timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8";
mysql_query($sql,$con);
 ?>
