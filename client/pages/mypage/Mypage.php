<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="./mypage.css?after1" />
	<link rel="stylesheet" href="../../component/navbar/navbar.css?after" />
	<link rel="stylesheet" href="../../component/sidebar/sidebar.css?after" />
</head>

<body>
	<header>
		<?php require "../../component/navbar/Navbar.php" ?>
	</header>
	<div class="mypage">
		<div class="sidebarDiv">
			<?php require "../../component/sidebar/Siderbar.php"?>
		</div>
		<div class="mypageDiv">Mypage</div>
	</div>
</body>

</html>