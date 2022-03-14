<?php
include("../../db.php");

if(isset($_POST["id"]) && isset($_POST["password"])){
	// security
	$id = mysqli_real_escape_string($db, $_POST["id"]);
	$password = mysqli_real_escape_string($db, $_POST["password"]);
	// check error
	if(empty($id) && empty($password)){
		echo "empty error";
	} else {
		$id_check = "SELECT * FROM member WHERE mb_id = '$id'";
		$result = mysqli_query($db, $id_check);

		if(mysqli_num_rows($result) !== 1){
			// 에러
			echo "id error";
		} else {
			$row = mysqli_fetch_assoc($result);
			$hash = $row['mb_password'];
			$password_check = password_verify($password, $hash);

			if(!$password_check){
				echo "password error";
			} else {
				echo "login success";
			}
		}
	}
} else {
	// 알 수 없는 에러
	echo "error";
}
?>