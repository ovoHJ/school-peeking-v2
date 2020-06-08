<?php

include('./DB.php');

$mb_id =   trim($_POST['email']);
$mb_pwd =  trim($_POST['pwd']);

header("Content-Type: text/html; charset=UTF-8");

if(!$mb_id) {
    
    echo "<script>alert('이메일이 넘어오지 않았습니다.')</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
}
if(!$mb_pwd) {
    echo "<script>alert('비밀번호가 넘어오지 않았습니다.')</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
}

$sql = "SELECT * FROM member WHERE id = '$mb_id'";
$result = mysqli_query($conn, $sql);
$mb = mysqli_fetch_assoc($result);

if(!($mb_pwd === $mb['pwd'])) {
    if(!$mb['id'])
        echo "<script>alert('존재하지 않는 계정입니다.')</script>";
    else
        echo "<script>alert('잘못된 비밀번호를 입력하셨습니다.')</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
}

$_SESSION['id'] = $mb_id;

mysqli_close($conn);

echo "<script>location.replace('../index.php');</script>";

?>