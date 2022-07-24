<?php
session_start();
 if(isset($_SESSION['user'])){
    header('location:dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<body>
<div class="container">
  <div class="title">Login...</div>
  <?php
    if(isset($_REQUEST['message'])){
        ?>
        <p style="color:<?=$_REQUEST['color']?>; margin-top:15px;"><?=$_REQUEST['message']?></p>
        <?php
    }
  ?>
  <form action="process.php" method="post">
    <div class="user-details" >
      <div class="input-box" style="display: block;">
        <span class="details">Email</span>
        <input type="text" name="email" id="" placeholder="Enter your email" required style="width: 640px;" />
      </div>
      <div class="input-box" style="display: block;">
        <span class="details">Password</span>
        <input type="password" name="password" id="" placeholder="Enter your password" required style="width: 640px;" />
      </div>
    </div>
    <div class="button">
      <input type="submit" value="Login" name="login" />
    </div>
  </form>
  <div >
                <p>Register Your Account <a href="register.php">Click Here...</a></p>
    </div>
</div>
</body>
</body>
</html>