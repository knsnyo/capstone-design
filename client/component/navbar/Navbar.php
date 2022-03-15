<?php
session_start();

if(isset($_SESSION["mb_id"])){
  $user = $_SESSION["mb_id"];
} else {
  $user = "";
}
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="./navbar.css">
</head>

<body>
  <div class="navbar">
    <div class="navbarLeft">
      <ul class="navbarList">
        <li class="navbarListItem">
          <a class="link" href="../../pages/home/Home.php">
            Home
          </a>
        </li>
      </ul>
    </div>
    <div class="navbarCenter">
      <ul class="navbarList">
        <li class="navbarListItem">
          <a class="link">
            menu 1
          </a>
        </li>
        <li class="navbarListItem">
          <a class="link">
            menu 2
          </a>
        </li>
        <li class="navbarListItem">
          <a class="link">
            menu 3
          </a>
        </li>
      </ul>
    </div>
    <div class="navbarRight">
      <?php
      if("" === $user) {
      ?>
      <ul class="navbarList">
        <li class="navbarListItem">
          <a href="../../pages/login/login.php" class="link">
            LOGIN
          </a>
        </li>
        <li class="navbarListItem">
          <a href="../../pages/register/Register.php" class="link">
            REGISTER
          </a>
        </li>
      </ul>
      <?php
      } else {
      ?>
      <ul class="navbarList">
        <li class="navbarListItem">
          <a class="link" href="../../pages/mypage/Mypage.php">
            <?php echo "$user" ?>
          </a>
        </li>
        <li class="navbarListItem">
          <a class="link" href="../../../api/router/auth/logout.php">
            LOGOUT
          </a>
        </li>
      </ul>
      <?php
      }
      ?>
    </div>
  </div>
</body>

</html>