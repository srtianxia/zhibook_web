<?php
include("connect.php" );
include("token.php");
$name = addslashes($_POST['name']);
$password = addslashes($_POST['password']);

$query = "SELECT * FROM person WHERE name = '".$name."' AND password = '".$password."'";
$result = mysql_query($query);
if ($row = mysql_fetch_assoc($result)) {
  $row["token"] = create_token($row["id"]);
}else{
  header("http/1.1 400 Bad Request");
  $row=array("error" => "account or password error");
 }
echo json_encode($row);
?>
