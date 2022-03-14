<?php
session_start();
include("../../db.php");

if(isset($_POST["id"]) && isset($_POST["password"])){
	// security
	$id = mysqli_real_escape_string($db, $_POST["id"]);
	$password = mysqli_real_escape_string($db, $_POST["password"]);
	// check error
	if(empty($id) && empty($password)){
		header("location: ../../../client/pages/login/Login.php?error=EMPTY ERROR");
		exit();
	} else {
		$id_check = "SELECT * FROM member WHERE mb_id = '$id'";
		$result = mysqli_query($db, $id_check);

		if(mysqli_num_rows($result) !== 1){
			// 에러
			header("location: ../../../client/pages/login/Login.php?error=ID ERROR");
			exit();
		} else {
			$row = mysqli_fetch_assoc($result);
			$hash = $row['mb_password'];
			$password_check = password_verify($password, $hash);

			if(!$password_check){
				header("location: ../../../client/pages/login/Login.php?error=PASSWORD ERROR");
				exit();
			} else {
				$_SESSION["mb_id"] = $row["mb_id"];

				header("location: ../../../client/pages/home/Home.php");
				exit();
			}
		}
	}
} else {
	// 알 수 없는 에러
	header("location: ../../../client/pages/login/Login.php?error=I don't know this error.");
	exit();
}
?>