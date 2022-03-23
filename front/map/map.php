<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="../css/btn.css">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/map.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="../js/map.js"></script>
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
          <a href="javascript:void(0)" class="none_btn">
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
    </div>

  </header>

  <section>
    <div>
      <div class="map_kakao">

        <!-- kakao Map 매물 데이터 메뉴 -->
        <div class="map_menu">
          <div class="map_side">
              <span class="map_side_menu">방 찾기</span>
              <span class="map_side_menu">찜한 매물</span>
              <span class="map_side_menu">감성 데이터</span>
          </div>

          <div class="map_setting">
            <span class="material-icons">settings 설정</span>
          </div>
        </div>


        <!-- kakao Map API -->
        <div class="kakao_api">
          <div class="kakao">
            <div class="kakaoMap_size" id="map"></div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=605db5303d35869f7dea1bc7ebc32ea0"></script>
            <script src="../js/kakao.js"></script>
          </div>
        </div>
      </div>

      <!-- 매물 데이터 -->
      <div class="building">

      </div>

    </div>
  </section>

</body>

</html>