
var mapContainer = document.getElementById('map'), // 지도를 표시할 div  
    mapOption = { 
        center: new kakao.maps.LatLng(35.8396648,128.5737281), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

fetch("http://isc963.dothome.co.kr/api/router/house/location_point copy.php")
		.then((res) => res.json())
		.then((datas) => {
			datas.map((data) => {
                var num1=parseFloat(data.x);
                var num2=parseFloat(data.y);
                var positions =  new kakao.maps.LatLng(num1, num2);
			})
		});
 
    
for (var i = 0; i < positions.length; i ++) {
    
    // 마커 이미지의 이미지 크기 입니다
    var imageSize = new kakao.maps.Size(24, 35); 
    
    // 마커 이미지를 생성합니다     
    
    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        map: map, // 마커를 표시할 지도
        position: positions[i].latlng, // 마커를 표시할 위치
      // 마커의 타이틀, 마커에 마우스를 올리면 타이틀이 표시됩니다
     // 마커 이미지 
    });
}