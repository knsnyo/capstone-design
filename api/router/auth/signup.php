<?php
# 회원가입 처리
include("../../db.php");

if(isset($_POST["id"]) && isset($_POST["pw"]) 
&& isset($_POST["name"]) && isset($_POST["email"])
// && isset($_POST["age"]) 
&& isset($_POST["gender"]) && isset($_POST["tel"])){
	# security
	$id = mysqli_real_escape_string($db, $_POST["id"]);
	$password = mysqli_real_escape_string($db, $_POST["pw"]);
	$name = mysqli_real_escape_string($db, $_POST["name"]);
	$email = mysqli_real_escape_string($db, $_POST["email"]);
	// $age = mysqli_real_escape_string($db, $_POST["age"]);
	$sex = mysqli_real_escape_string($db, $_POST["gender"]);
	$tel = mysqli_real_escape_string($db, $_POST["tel"]);

	if(empty($id) && empty($password) &&
	empty($name) && empty($tel)){
		# case: empty
		header("location: http://isc963.dothome.co.kr/front/signup/signup.php");
		exit();
	} else {
		# security
		$password = password_hash($password, PASSWORD_DEFAULT);

		# id 중복 체크
		$checkId = "SELECT * FROM user WHERE id = '$id';";
		$order = mysqli_query($db, $checkId);

		if(mysqli_num_rows($order) > 0) {
			# 중복
			header("location: http://isc963.dothome.co.kr/front/signup/signup.php");
		} else {
			# 중복 x
			$save = "INSERT INTO `user`(`id`, `password`, `name`, `email`, `age`, `sex`, `tel`) VALUES ('$id','$password','$name','$email','','$sex','$tel')";
			$result = mysqli_query($db, $save);

			header("location: http://isc963.dothome.co.kr/front/signup/signup.php");
			exit();
		}
	}
} else {
	# error
	header("location: http://isc963.dothome.co.kr/front/signup/signup.php");
	exit();
}
?>