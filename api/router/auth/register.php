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
		// security
		$hash = password_hash($password, PASSWORD_DEFAULT);

		// 중복 check
		$id_check = "SELECT * FROM member WHERE mb_id = '$id'";
		$order = mysqli_query($db, $id_check);

		if(mysqli_num_rows($order) > 0){
			// 중복
			echo "id error";
		} else {
			// 중복 아님
			$sql_save = "INSERT INTO member(mb_id, mb_password) VALUES('$id', '$hash');";
			$result = mysqli_query($db, $sql_save);
			echo "save!";
		}
	}
} else {
	// 알 수 없는 에러
	echo "error";
}
?>