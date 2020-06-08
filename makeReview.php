<?php

include("./src/DB.php");

$rv_id = $_SESSION ['id'];
$rv_text = trim($_POST['text-review']);
$date = date("Y-m-d");

header("Content-Type: text/html; charset=UTF-8");

$sql = "INSERT INTO review VALUES (0, '$rv_id', '$rv_text', '$date')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "<script>alert('리뷰가 등록되었습니다.');</script>";
  echo "<script>location.replace('./review.php');</script>";
  exit;
  mysqli_close($conn);
}



?>