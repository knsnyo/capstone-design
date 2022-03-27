<?php
session_start();

if (isset($_SESSION['id'])) {
	$name = $_SESSION['name'];
} else {
	$name = "";
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>디쿠방</title>
	<link rel="stylesheet" href="./css/btn.css">
	<link rel="stylesheet" href="./css/main.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/reset-css@5.0.1/reset.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script defer src="./js/main.js"></script>
</head>

<!--헤더 시작-->
<header>
	<div class="container">
		<div class="header">

			<!--대가대직방 로고-->
			<span class="logo">
				<a href="../../front/index.php">디쿠방</a>
			</span>
			<!--대가대직방 로고-->

			<!--메뉴 시작-->
			<span class="menu">
				<a href="../../front/map/map.php" class="none_btn">
					<span class="material-icons">location_on</span>지도
				</a>
				<a href="javascript:void(0)" class="none_btn">
					<span class="material-icons">home</span>원룸
				</a>
				<a href="javascript:void(0)" class="none_btn">
					<span class="material-icons">maps_home_work</span>투룸
				</a>
				<a href="../../front/board/board.php" class="none_btn">
					<span class="material-icons">assignment</span>게시판
				</a>
				<?php if ("" === $name) { ?>
					<a href="../../front/login/login.php" class="login btn">로그인</a>
					<a href="../../front/signup/signup.php" class="signup btn">회원가입</a>
				<?php } else { ?>
					<span><a href="../../front/myPage/myPage.php"><?php echo "$name"?></a></span>
					<a href="../../api/router/auth/logout.php" class="signup btn">로그아웃</a>
				<?php } ?>
			</span>
			<!--메뉴 끝-->

		</div>
	</div>
</header>
<!--헤더 끝-->