<?php
  session_start();

  if(isset($_SESSION['ss_mb_id'])) {
    $mainNav_dp = '';
    $mainNav2_dp = 'none';
  } else {
    $mainNav_dp = 'none';
    $mainNav2_dp = '';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>첫 등교는 IP로!</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/faviconSchool.ico" />
    <link rel="icon" href="images/faviconSchool.ico" />

    <link rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css" />

    <link rel="stylesheet" href="./css/grayscale.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/index.css" />
</head>
<body>
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="index.php"
          >첫 등교는 IP로!</a
        >
        <button
          class="navbar-toggler navbar-toggler-right"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto list-unstyled">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger"
              href=""
                >리뷰 쓰기</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link js-scroll-trigger"
                href=""
                >마이페이지</a
              >
            </li>
            <li class="nav-item">
              <a 
                class="nav-link js-scroll-trigger"
                href="src/logout_back.php"
                id="logout"
                >로그아웃</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="section1">
        <p>
          <h1>첫 등교는 IP로!</h1>
          <span>미림여자정보과학고에 오신 것을 환영합니다</span>
        </p>
        <br><img src="images/index/video.png" alt="video" id="video">
      </div>

      <!-- <table>
          <tr>
              <td><img src="images/index/foo1.png" alt="box"></td>
              <td>
                  <h3>구조도 VS 로드뷰</h3>
                  당신에게 필요한 기능을 선택하세요!
              </td>
          </tr>
          <tr>
              <td>
                  <h3>학교의 전체 위치를 파악할 수 있는 구조도</h3>
                  로드뷰~
              </td>
              <td><img src="images/index/foo2.png" alt="box"></td>
          </tr>
          <tr>
              <td><img src="images/index/foo3.png" alt="box"></td>
              <td>
                  <h3>자세한 학교 내부를 구경할 수 있는 로드뷰</h3>
                  학급과 실습실 등의 이동노선을 알아보세요!
              </td>
          </tr>
          <tr>
              <td>
                  <h3>TO. 첫 등교는 IP로!</h3>
                  수정이 불가하니 리뷰는 신중하게!
              </td>
              <td><img src="images/index/foo4.png" alt="box"></td>
          </tr>
      </table>

      <div>
          <div>
              <h2>첫 방문이신가요?</h2>
              <span>주요 장소 한 눈에 보기</span>
              <input type="button" value="구조도 보기">
          </div>
          <div>
              <h2>미림 구조 마스터!</h2>
              <span>자세한 내부 로드뷰 보기</span>
              <input type="button" value="로드뷰 보기">
          </div>
      </div> -->
      
    </div>
</body>
</html>