<?php
# 로그아웃 처리

session_start();
session_unset();
session_destroy();

header("location: ../../../client/pages/home/Home.php");
exit();
?>