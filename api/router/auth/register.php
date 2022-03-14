<?php
include("../../db.php");

if(isset($_POST["id"]) && isset($_POST["password"])){
	// security
	$id = mysqli_real_escape_string($db, $_POST["id"]);
	$password = mysqli_real_escape_string($db, $_POST["password"]);
	// check error
	if(empty($id) && empty($password)){
		header("location: ../../../client/pages/register/Register.php?error=EMPTY ERROR");
		exit();
	} else {
		// security
		$hash = password_hash($password, PASSWORD_DEFAULT);

		// 중복 check
		$id_check = "SELECT * FROM member WHERE mb_id = '$id'";
		$order = mysqli_query($db, $id_check);

		if(mysqli_num_rows($order) > 0){
			// 중복
			header("location: ../../../client/pages/login/Login.php?error=ID ERROR");
			exit();
		} else {
			// 중복 아님
			$sql_save = "INSERT INTO member(mb_id, mb_password) VALUES('$id', '$hash');";
			$result = mysqli_query($db, $sql_save);
			
			header("location: ../../../client/pages/login/Login.php");
			exit();
		}
	}
} else {
	// 알 수 없는 에러
	header("location: ../../../client/pages/login/Login.php?error=I don't know this error.");
	exit();
}
?>