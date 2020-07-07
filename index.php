<?php
  session_start();

  if(isset($_SESSION['id'])) {
    $mainNav_dp = '';
    $mainNav2_dp = 'none';
  } else {
    $mainNav_dp = 'none';
    $mainNav2_dp = '';
  }
?>

<!DOCTYPE html>
<html lang="ko">
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

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/grayscale.css" />
    <link rel="stylesheet" href="./css/index.css" />

    <style>
    	#element_to_pop_up {
        background-color:#fff;
        border-radius:15px;
        color:#000;
        display:none;
        padding:20px;
        min-width:400px;
        min-height: 180px;
    	}
    	.b-close{
    		cursor:pointer;
    		position:absolute;
    		right:10px;
    		top:5px;
    	}
    </style>
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
            <!--
            <li class="nav-item">
              <a
                class="nav-link js-scroll-trigger"
                href="mypage.php"
                style="display:<?php echo $mainNav_dp?>;"
                >마이페이지</a
              >
            </li>
            -->
            <li class="nav-item">
              <a
                class="nav-link js-scroll-trigger"
                href="src/logout_back.php"
                style="display:<?php echo $mainNav_dp?>;"
                >로그아웃</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link js-scroll-trigger"
                href="./login.php"
                style="display:<?php echo $mainNav2_dp?>;"
                >로그인/회원가입</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="box">
            <img src="images/index/scroll.png" alt="scroll" id="scroll">

            <div class="container">

              <div class="section1">
                <p>
                  <h1>첫 등교는 IP로!</h1>
                  <span>미림여자정보과학고에 오신 것을 환영합니다</span>
                </p>
                <br><img src="images/index/video.png" alt="video"  id="my-button">
              </div>
            </div>

            <div id="element_to_pop_up">
            		<a class="b-close">x<a/>
            		<iframe width="640" height="360" src="http://www.youtube.com/embed/pPb2lIap6Es?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="section2 row">
              <img src="images/index/foo1.png" alt="box" class="col-sm-6">
              <div class="col-sm-6 m-auto">
                <h3>구조도 VS 로드뷰</h3>
                <span><br>당신에게 필요한 기능을 선택하세요!</span>
              </div>
              <div class="col-sm-6 m-auto">
                <h3>학교의 전체 위치를<br> 파악할 수 있는 구조도</h3>
                <span><br>학교의 전체적인 구조를<br> 한눈에 파악하세요!</span>
              </div>
              <img src="images/index/foo2.png" alt="box" class="col-sm-6">
              <img src="images/index/foo3.png" alt="box" class="col-sm-6">
              <div class="col-sm-6 m-auto">
                <h3>자세한 학교 내부를<br> 구경할 수 있는 로드뷰</h3>
                <span><br>학급과 실습실 등의<br> 이동노선을 알아보세요!</span>
              </div>
              <div class="col-sm-6 m-auto">
                <h3>TO. 첫 등교는 IP로!</h3>
                <span><br>수정이 불가하니<br> 리뷰는 신중하게 남겨주세요!</span>
              </div>
              <img src="images/index/foo4.png" alt="box" class="col-sm-6">
            </div>

            <div class="section3 row">
              <div class="col-sm-6 m-auto">
                  <h2>첫 방문이신가요?</h2>
                  <span>주요 장소 한 눈에 보기</span><br>
                  <input type="button" value="구조도 보기" onclick="location.href = 'structure.php'">
              </div>
              <div class="col-sm-6 m-auto">
                  <h2>미림 구조 마스터!</h2>
                  <span>자세한 내부 로드뷰 보기</span><br>
                  <input type="button" value="로드뷰 보기" onclick="location.href = 'roadview.php'">
              </div>
            </div>
    </div>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.bpopup-0.10.0.min.js"></script>

    <script>
    	 ;(function($) {
             // DOM Ready
            $(function() {
                // Binding a click event
                // From jQuery v.1.7.0 use .on() instead of .bind()
                $('#my-button').bind('click', function(e) {
            var self = $(this) //button
            , content = $('.content');
            $('element_to_pop_up').bPopup({
                onOpen: function() {
                    content.html(self.data('bpopup') || '');
                },
                onClose: function() {
                    content.empty();
                }
            });
                    // Prevents the default action to be triggered.
                    e.preventDefault();
                    // Triggering bPopup when click event is fired
                    $('#element_to_pop_up').bPopup();
                });
            });
        })(jQuery);
    </script>

</body>
</html>