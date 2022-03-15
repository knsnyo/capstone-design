<?php
# 회원탈퇴 처리
session_start();

include "../../db.php";

$id = $_SESSION['mb_id'];
$sql = "DELETE FROM member WHERE mb_id='$id';";

mysqli_query($db, $sql);

session_unset();
session_destroy();

echo "
<script>
alert('회원탈퇴 되었습니다.');
</script>
";

header("location: ../../../client/pages/home/Home.php");
exit();
?>