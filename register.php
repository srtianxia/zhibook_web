<?php
 include("connect.php" );

 $name = addslashes($_POST["name"]);
 $password = addslashes($_POST["password"]);
 $headurl = addslashes($_POST["headurl"]);

 if ($name == "" || $password == "") {
 	header("http/1.1 400 Bad Request");
 	$result["info"] =  "name 或 password 不能为空";
 }else{
 	$query = "SELECT * FROM person WHERE name = '{$name}'";
	$user = mysql_query($query);
 	if ($row = mysql_fetch_assoc($user)) {
 		header("http/1.1 400 Bad Request");
 		$result["info"] =  $name." 已被使用";
 	}else{
		$query = "INSERT INTO person ( name , password ,headurl) VALUES ( '".$name."' , '".$password."' , '".$headurl."' )";
		 if (mysql_query($query)) {
		 	$result["info"] =  $query;
		 }else{
		 	header("http/1.1 500 Internal Server Error");
		 	$result["info"] =  mysql_error();
		 }
 	}

 }
 echo json_encode($result);
?>
