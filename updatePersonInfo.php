<?php
include("connect.php");
include("token.php");
$headurl = addslashes($_POST["headurl"]);
$token = addslashes($_POST["token"]);
$sign = addslashes($_POST["sign"]);
$authorId = checkToken($token,$returnData);
if ($authorId == -1) {
  echo json_encode($returnData);
  return;
}
$sql = "UPDATE person SET headurl = '{$headurl}' WHERE id = '{$authorId}'";
if(mysql_query($sql)){
  $result["info"] = $sql;
  echo json_encode($result);
}else {
  header("http/1.1 400 Bad Request");
  $result["error"] = mysql_error();
}
 ?>
