<?php
include("connect.php");
include("token.php");
$questionId = addslashes($_POST["questionId"]);
$content = addslashes($_POST["content"]);
$authorId = checkToken(addslashes($_POST["token"]),$returnData);
if ($authorId == -1) {
  echo json_encode($returnData);
  return;
}
$sql = "INSERT INTO answer (authorId, questionId, content, data)
VALUES('".$authorId."', '".$questionId."','{$content}',now())";
if (mysql_query($sql)) {
    $update = "UPDATE question SET answerCount=answerCount+1 , recent = now() WHERE id = {$questionId}";
		mysql_query($update);
		$returnData["info"] = $sql;
	}else{
		header("http/1.1 500 Internal Server Error");
		$returnData["error"] = mysql_error();
	}

 	echo json_encode($returnData);
 ?>
