<?php
$con = mysql_connect("localhost","root","19951024");
if (!$con) {
	die('could not connect:' . mysql_error());
}
mysql_query("set names 'utf8'");
mysql_select_db("zhishu_db", $con);
?>