<?php
include("connect.php");
include("token.php");
$userId = checkToken(addslashes($_POST["token"]),$returnData);
if($userId == -1){
  echo json_encode($returnData);
  return;
}
$sql = "SELECT folder,id FROM collectFolder WHERE userId = {$userId}";
$result = mysql_query($sql);
while($row = mysql_fetch_assoc($result)){
  $data[] = $row;
}
$dataInfo["userId"] = $userId;
$dataInfo["folders"] = $data;
echo json_encode($dataInfo);
 ?>
