<?php
include("connect.php");
$questionId = addslashes($_POST["questionId"]);

$sql = "SELECT answer.id,answer.content,answer.data,
person.name as answerAuthorName,person.headurl as answerAuthorHead
FROM answer INNER JOIN person ON person.id = answer.authorId WHERE answer.questionId = {$questionId}";
$result = mysql_query($sql);

while($row = mysql_fetch_assoc($result)){
  $data[] = $row;
}
$dataInfo["answers"] = $data;
echo json_encode($dataInfo);
 ?>
