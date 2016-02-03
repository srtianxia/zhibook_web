<?php
include("connect.php");
$sql = "SELECT * FROM question";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)) {
	echo " " . $row['title'] . " " . $row['content'];
}
 ?>
