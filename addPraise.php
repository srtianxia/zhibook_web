<?php
include("connect.php");
include("token.php");
$id = addslashes($_POST["id"]);
if ($id == 1) {
  $sql = "UPDATE answer SET praise = praise+1 WHERE id={$id}";
}else if ($id == -1) {
  $sql = "UPDATE answer SET praise = praise-1 WHERE id={$id}";
}
if (mysql_query($sql)) {
  $result["info"] = $sql;
  echo json_encode($result);
}else {
  header("http/1.1 400 Bad Request");
}
 ?>
