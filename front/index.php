<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>대가대직방</title>
  <link rel="stylesheet" href="./css/btn.css">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="./js/main.js"></script>
</head>

<?php include "./header/header.php"?>

  <!--검색창 시작-->
  <section>
    <div class="container">
      <div class="section_01">
        <div class="right-side">
          <div class="search">
            <input type="text" placeholder="원하는 매물을 검색하세요!">
            <img src="https://s3.ap-northeast-2.amazonaws.com/cdn.wecode.co.kr/icon/search.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--검색창 끝-->


  <!--카카오 API 시작-->
  <section>
    <div class="container">
      <div class="section_02">
        <!--카카오맵 시작-->
        <div class="left-side">
          <div class="kakao">
            <div id="map" style="width:1000px;height:400px;"></div>
              <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=605db5303d35869f7dea1bc7ebc32ea0"></script>
              <script>
                var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                    mapOption = { 
                        center: new kakao.maps.LatLng(35.909734775051504, 128.81796715333087), // 지도의 중심좌표
                        level: 3 // 지도의 확대 레벨
                    };
                var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
                // 마커가 표시될 위치입니다 
                var markerPosition  = new kakao.maps.LatLng(35.909734775051504, 128.81796715333087); 
                // 마커를 생성합니다
                var marker = new kakao.maps.Marker({
                    position: markerPosition
                });
                // 마커가 지도 위에 표시되도록 설정합니다
                marker.setMap(map);
              </script>
          </div>
        </div>
        <!--카카오맵 끝-->

      </div>
    </div>
  </section>
  <!--카카오 API 끝-->

  <?php include "./footer/footer.php"?>

</body>
</html>