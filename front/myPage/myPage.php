<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="../css/btn.css?after">
  <link rel="stylesheet" href="../css/main.css?after">
  <link rel="stylesheet" href="../css/myPage.css?after">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="../js/myPage.js"></script>
</head>

<body>
  <header>
    <div class="container">
      <div class="header">

        <!--대가대직방 로고-->
        <span class="logo">
          <a href="../index.php">디쿠방</a>
        </span>
        <!--대가대직방 로고-->

        <!--메뉴 시작-->
        <span class="menu">
          <a href="../map/map.php" class="none_btn">
            <span class="material-icons">location_on</span>지도
          </a>
          <a href="javascript:void(0)" class="none_btn">
            <span class="material-icons">home</span>원룸
          </a>
          <a href="javascript:void(0)" class="none_btn">
            <span class="material-icons">maps_home_work</span>투룸
          </a>
          <a href="javascript:void(0)" class="none_btn">
            <span class="material-icons">apartment</span>전세
          </a>
          <a href="javascript:void(0)" class="none_btn">
            <span class="material-icons">assignment</span>게시판
          </a>
          <a href="../login/login.php" class="login btn">로그인</a>
          <a href="../signup/signup.php" class="signup btn">회원가입</a>
        </span>
        <!--메뉴 끝-->

      </div>
    </div>
  </header>


  <!--내정보 시작-->
  <section>
    <div class="my-page">

      <div class="box">
        <h3>MY Page</h3>
      </div>
      
      <div class="page-menu">
        <div class="size-1 info"><a href="javascript:info_open();" style="color: gray;">내 정보</a></div>
        <div class="size-1 inquiry"><a href="javascript:inquiry_open();" style="color: gray;">즐겨찾기</a></div>
      </div>

      <div class="page-menu-detail">
        <div class="info-detail">
          <div class="info-info">
            <div class="info-id info-interval">
              아이디
            </div>
            <div class="info-name info-interval">
              이름
            </div>
            <div class="info-email info-interval">
              이메일
            </div>
            <div class="info-phone info-interval">
              번호
            </div>
          </div>
        </div>

        <div class="inquiry-detail">
          <div class="inquiry-info">
            world
          </div>
        </div>
      </div>

      
    </div>
  </section>
  <!--내정보 끝-->




  <footer>
    <div class="footer">

    </div>
    <div class="footer_02">
      <div class="inner">

        <ul class="menu">
          <li><a href="javascript:void(0)">개인정보처리방침</a></li>
          <li><a href="javascript:void(0)">영상정보처리기기 운영관리 방침</a></li>
          <li><a href="javascript:void(0)">홈페이지 이용약관</a></li>
          <li><a href="javascript:void(0)">위치정보 이용약관</a></li>
          <li><a href="javascript:void(0)" class="blue">디쿠방 이용약관</a></li>
          <li><a href="javascript:void(0)">윤리경영 핫라인</a></li>
        </ul>

        <div class="info">
          <span>팀명 &colon; 대가대직방</span>
          <span>팀장 &colon; 김장현 &verbar; 조원 &colon; 신영호, 유선기, 홍성훈</span>
          <span>TEL &colon; 010-1234-5678</span>
          <span>개인정보 책임자 &colon; 대가대직방</span>
        </div>

        <p class="copyright" style="color:rgb(0, 0, 255)">
          &copy; <span class="this-year"></span> Daegu Catholic University. Capstone Design 대가대직방.
        </p>
        <img src="./images/starbucks_logo_only_text.png" alt="" class="logo" />

      </div>
    </div>
  </footer>
</body>

</html>