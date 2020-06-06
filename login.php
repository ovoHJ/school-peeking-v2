<?php
    session_start();

    if(isset($_SESSION['ss_mb_id'])) {
        echo "<script>location.href = './index.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>첫 등교는 IP로! - 로그인</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/faviconSchool.ico" />
    <link rel="icon" href="images/faviconSchool.ico" />

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css" />

    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/login.css" />
</head>
<body>

<div class="view">
    <div class="logo">
        <img src="images/mirim.PNG" />
        <span class="school-name">미림여자정보과학고등학교</span>
    </div>
    <div class="profile">
        <img class="person" src="images/person.png" />
    </div>
    <div class="login">
        <form action="src/login_back.php" onsubmit="return login_submit(this);" method="post">
            <input type="email" name="email" id="email" placeholder="이메일" /><br/>
            <input type="password" name="pwd" id="pwd" placeholder="비밀번호" /><br/>
            <button type="submit" name id="btn_login">로그인</button>
        </form>
    </div>
    <div class="join">
        아직 첫등교는 IP로의 회원이 아니신가요?<br/>
        <a href="join.php" class="click_join"><b>지금 가입하러 가기</b></a>
    </div>
</div>

<script>
    function login_submit(f) {
        if(!f.email.value) {
            alert("이메일을 입력하세요");
            f.email.focus();
            return false;
        }

        if(f.pwd.value.length < 4) {
            if(!f.pwd.value) alert("비밀번호를 입력하세요");
            else alert("비밀번호는 4글자 이상입니다. 다시 입력하세요.");
            f.pwd.value = null;
            f.pwd.focus();
            return false;
        }
    }
</script>

</body>
</html>