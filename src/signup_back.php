<?php

include('./DB.php');

$mb_name =      trim($_POST['name']);
$mb_id =        trim($_POST['email']);
$mb_pwd =  trim($_POST['pwd']);

header("Content-Type: text/html; charset=UTF-8");

if(!$mb_name) {
    echo "<script>alert('이름이 넘어오지 않았습니다.')</script>";
    echo "<script>location.replace('../join.php');</script>";
    exit;
}
if(!$mb_id) {
    echo "<script>alert('이메일이 넘어오지 않았습니다.')</script>";
    echo "<script>location.replace('../join.php');</script>";
    exit;
}
if(!$mb_pwd) {
    echo "<script>alert('비밀번호가 넘어오지 않았습니다.')</script>";
    echo "<script>location.replace('../join.php');</script>";
    exit;
}

$sql = "SELECT * FROM member WHERE id = '$mb_id'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    echo "<script>alert('이미 사용중인 회원 이메일입니다.')</script>";
    echo "<script>location.replace('../join.php');</script>";
    exit;
}


$sql = "INSERT INTO rank VALUES (0, '$mb_id', 0)";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO member VALUES('$mb_id','$mb_name','$mb_pwd')";
$result = mysqli_query($conn, $sql);

if($result) {
    $_SESSION['id'] = $mb_id;

    $sql = "INSERT INTO inven VALUES(0,'$mb_id', 0)";
    $result = mysqli_query($conn, $sql);
    
    echo "<script>alert('회원가입이 완료되었습니다');</script>";
    echo "<script>location.replace('../login.php');</script>";
    exit;
    mysqli_close($conn);
}
?>