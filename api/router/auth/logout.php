<?php
session_start();
session_unset();
session_destroy();

header("location: ../../../client/pages/home/Home.php");
exit();
?>