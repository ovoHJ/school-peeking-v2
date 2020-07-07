<?php

include("./src/DB.php");

$rv_id = $_SESSION ['id'];
$rv_text = trim($_POST['text-review']);
date_default_timezone_set('Asia/Seoul');
$date = date_create('now')->format('Y-m-d');

echo $date;

header("Content-Type: text/html; charset=UTF-8");

$sql = "SELECT name from member where id = '$rv_id'";

$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);

if ($num_rows > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $name = implode($row);
  }
}

$sql = "INSERT INTO review VALUES (0, '$name', '$rv_text', '$date')";
$result = mysqli_query($conn, $sql);

if($result){
  echo "<script>alert('리뷰가 등록되었습니다.');</script>";
  echo "<script>location.replace('./review.php');</script>";
  exit;
  mysqli_close($conn);
}



?>