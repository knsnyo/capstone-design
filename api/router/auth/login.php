<?php
<<<<<<< HEAD

session_start();
include('../../db.php');

 if(isset($_POST['id']) && isset($_POST['password']))
 {

    $id = mysqli_real_escape_string($db, $_POST['id']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    //초기 입력값 확인
    if(empty($id))
    {
        echo "<script> 
        alert('아이디가 입력되지 않음'); 
        location.replace('../../../login/login.html')</script>";
    }

    else if(empty($password))
    {
        echo "<script> alert('패스워드가 입력되지 않음'); location.replace('../../../login/login.html')</script>";
    }

    else
    {
        $sql = " select * from user where  id = '$id'";
        $reslt = mysqli_query($db, $sql);
        
        //로그인 정보확인
        if(mysqli_num_rows($reslt) == 1)
        {
         $row = mysqli_fetch_assoc($reslt);
         $hash = $row['password'];
         $cp = password_verify($password, $hash);
        
            //해쉬값 복호화
            if($cp)
            {
                $_SESSION['id'] = $row['id'];
                $_SESSION['name'] = $row['name'];
                echo "<script> alert('로그인 성공'); location.replace('../../../index.html')</script>";  
            }
            else
            {
                echo "<script> alert('비밀번호를 확인하세요'); location.replace('../../../login/login.html')</script>";
            }

        }
        else
        {
            echo "<script> alert('아이디를 확인하세요'); location.replace('../../../login/login.html')</script>";
        }

    }

 }

 else
 {
    echo "<script> alert('알 수 없는 오류 발생 서버관리자에게 문의 바람'); location.replace('index.html')</script>";
 }



=======
# 로그인 처리

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
>>>>>>> 063a572a42ab628d504aeb9333bb5cc3f1f84c16
?>