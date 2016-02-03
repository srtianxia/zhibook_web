<?php
$con =  mysql_connect("localhost","root","19951024");
if (!$con) {
	die('Could not connect :' . mysql_error());
}
mysql_select_db("zhishu_db",$con);
$sql = "CREATE TABLE person (
id int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
name varchar(16) NOT NULL,
password varchar(16) NOT NULL,
headurl varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8";
mysql_query($sql,$con);
mysql_close($con);
?>
