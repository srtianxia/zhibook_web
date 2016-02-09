<?php
include("connect.php");
include("token.php");
$token = addslashes($_POST["token"]);
$comment = addslashes($_POST["comment"]);

$authorId = checkToken($token,$returnData);
if ($authorId == -1) {
  echo json_encode($returnData);
  return;
}

$sql = "INSERT INTO comment (,)VALUES()"
 ?>
