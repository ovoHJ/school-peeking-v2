<?php
$mysql_host = "ec2-15-164-215-6.ap-northeast-2.compute.amazonaws.com";
$mysql_user = "roadview";
$mysql_password = "roadviewserver";
$mysql_db = "spV2";

//mysql을 연동시키기 위한 환경 개방
$conn = new mysqli($mysql_host, $mysql_user, $mysql_password, $mysql_db);

if($conn->connect_error)
{
    die("연결 실패: " . $conn->connect_error);
}

//세션(로그인 정보를 서버에 저장) 연결
session_start();
?>