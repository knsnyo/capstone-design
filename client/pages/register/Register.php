<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="register.css?after" />
	<link rel="stylesheet" href="../../component/navbar/navbar.css?after"/>
</head>

<body>
  <header>
    <?php require "../../component/navbar/Navbar.php"?>
  </header>
  <div class="register">
    <span class="registerTitle">Register</span>
    <form class="registerForm" action="../../../api/router/auth/register.php" method="POST">
      <label>ID</label>
      <input type="text" class="registerInput" placeholder="Enter your ID" name="id" />
      <label>PASSWORD</label>
      <input type="password" class="registerInput" placeholder="Enter your PASSWORD" name="password" />
      <button class="registerButton" type="submit">
        Register
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