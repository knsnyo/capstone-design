<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="login.css?after" />
	<link rel="stylesheet" href="../../component/navbar/navbar.css?after"/>
</head>

<body>
	<?php require "../../component/navbar/Navbar.php"?>
  <div class="login">
    <span class="loginTitle">Login</span>
    <form class="loginForm" action="../../../api/router/auth/login.php" method="POST">
      <label>ID</label>
      <input type="text" class="loginInput" placeholder="Enter your ID" name="id"/>
      <label>PASSWORD</label>
      <input type="password" class="loginInput" placeholder="Enter your PASSWORD" name="password"/>
      <button class="loginButton" type="submit">
        Login
      </button>
    </form>
    <?php 
    if(isset($_GET['error'])){
    ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
    <?php 
    }
    ?>
  </div>
</body>

</html>