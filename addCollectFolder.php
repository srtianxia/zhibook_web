<?php
include("connect.php");
include("token.php");
$userId = checkToken(addslashes($_POST["token"]),$returnData);
if ($userId == -1) {
  echo json_encode($returnData);
  return;
}
$folder = addslashes($_POST["folder"]);
$sql = "INSERT INTO collectFolder (folder,userId)
VALUES ('{$folder}','".$userId."')";
if (mysql_query($sql)) {
  $returnData["info"] = $sql;
}else {
  header("http/1.1 500 Internal Server Error");
  $returnData["error"] = mysql_error();
}
echo json_encode($returnData);
 ?>
