<?php
session_start();

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  $tel = $_SESSION['tel'];
} else {
  $id = "";
  $name = "";
  $email = "";
  $tel = "";
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>디쿠방</title>
  <link rel="stylesheet" rel="icon" href="/favicon.ico">
  <link rel="stylesheet" href="../css/btn.css?aa">
  <link rel="stylesheet" href="../css/main.css?aa">
  <link rel="stylesheet" href="../css/myPage.css?aa">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="../js/myPage.js?aa"></script>
</head>

<body>

  <?php include "../../front/header/header.php" ?>


  <!--내정보 시작-->
  <section>
    <div class="my-page">

      <div class="box">
        <h3>MY Page</h3>
      </div>

      <div class="page-menu">
        <div class="size-1 info"><a href="javascript:info_open();" style="color: gray;">내 정보</a></div>
        <div class="size-1 correction"><a href="javascript:correction_open();" style="color: gray;">정보 수정</a></div>
        <div class="size-1 inquiry"><a href="javascript:inquiry_open();" style="color: gray;">즐겨찾기</a></div>
      </div>

      <div class="page-menu-detail">
        <div class="info-detail">
          <div class="info-info">
            <div class="info-id info-interval">
              <?php echo "$id" ?>
            </div>
            <div class="info-phone info-interval">
              <?php echo "$tel" ?>
            </div>
            <div class="info-name info-interval">
              <?php echo "$name" ?>
            </div>
            <div class="info-email info-interval">
              <?php echo "$email" ?>
            </div>
            <div class="info-phone info-interval">
              <?php echo "$tel" ?>
            </div>
          </div>
        </div>

        <div class="correction-detail">
          <div class="info-correction">
            <form action="../../api/router/user/userupdate.php" method="POST" class="right">
              <div class="int-area">
                <input type="password" placeholder="password" name="user_pass" id="user_pass" autocomplete="off" required>
                <label for="id">이전 비밀번호</label>
                <input type="password" name="pw" id="pw" autocomplete="off" required>
                <label for="id">바꿀 비밀번호</label>
              </div>
              <div class="int-area">
                <input type="text" name="name" id="name" autocomplete="off" required>
                <label for="id">이름</label>
              </div>
              <div class="int-area">
                <input type="email" name="email" id="email" autocomplete="off" required>
                <label for="id">이메일</label>
              </div>
              <div class="int-area">
                <input type="text" name="tel" id="tel" autocomplete="off" required>
                <label for="id">전화번호</label>
              </div>
              <div class="btn-area left">
                <button id="btn" type="submit">수정</button>
              </div>
            </form>
          </div>
        </div>

        <div class="inquiry-detail">
          <div class="inquiry-info info-info">
            <div class="info-id info-interval">
              <span class="building-name">이름</span>
              <span class="building-price">가격</span>
              <span class="building-date">날짜</span>
            </div>
            <button class="button-delete">삭제</button>

            <div class="info-phone info-interval">
              <span class="building-name">이름</span>
              <span class="building-price">가격</span>
              <span class="building-date">날짜</span>
            </div>
            <button class="button-delete">삭제</button>
            
            <div class="info-name info-interval">
              <span class="building-name">이름</span>
              <span class="building-price">가격</span>
              <span class="building-date">날짜</span>
            </div>
            <button class="button-delete">삭제</button>
            
            <div class="info-email info-interval">
              <span class="building-name">이름</span>
              <span class="building-price">가격</span>
              <span class="building-date">날짜</span>
            </div>
            <button class="button-delete">삭제</button>

            <div class="info-phone info-interval">
              <span class="building-name">이름</span>
              <span class="building-price">가격</span>
              <span class="building-date">날짜</span>
            </div>
            <button class="button-delete">삭제</button>
            
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