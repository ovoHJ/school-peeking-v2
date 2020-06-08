<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>첫 등교는 IP로! - 리뷰</title>

    <!-- Font -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/moonspam/NanumSquare@1.0/nanumsquare.css" />

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/grayscale.css" />
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
              <a
                class="nav-link js-scroll-trigger"
                href="roadview.php"
                >로드뷰</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link js-scroll-trigger"
                href="review.php"
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
                >로그아웃</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section class="section-box text-center" style="margin-top: 100px">
    <h3 class="note">수정이 불가하니 한번 더 생각하고 작성해주세요!</h3>
    <div class="review-add">
        <form action="#" method="post">
            <input type="text" name="text-review" id="review-text" />
            <button type="submit" name id="btn-review">등록</button>
        </form>
    </div>
    <div class="all-review">
        <div class="all-review">
            <img class="profile" src="./images/person.png" alt="프로필 사진" style="width: 100px">
            <div class="review">
                <h5 class="name">김미림</h5>
                <p class="contents">너무 만족하며 쓰고 있습니다!</p>
                <span class="date">2020.05.21</span>
            </div>
        </div>
    </div>
</section>

</body>
</html>