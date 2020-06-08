<?php

include("./src/DB.php");  

$rv_num = trim($_POST['num']);
$method = trim($_POST['method']);

header("Content-Type: text/html; charset=UTF-8");

$sql = "DELETE FROM review WHERE NUM = '$rv_num'";
$result = mysqli_query($conn, $sql);

if($result){
  echo "<script>alert('리뷰가 삭제되었습니다.');</script>";
  if($method == "mypage"){
    echo "<script>location.replace('./mypage.php');</script>";
  } else {
    echo "<script>location.replace('./review.php');</script>";
  }
  
  exit;
  mysqli_close($conn);
}

?>  