<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="title">Registration</div>
  <?php
    if(isset($_REQUEST['message'])){
        ?>
        <p style="color:red; margin-top:15px;"><?=$_REQUEST['message']?></p>
        <p style="color:red; margin-top:15px;"><?=$_REQUEST['error']??''?></p>
        <?php
    }
  ?>
  <form action="process.php" method="post" enctype="multipart/form-data"/>
    <div class="user-details">
      <div class="input-box">
        <span class="details">Full Name</span>
        <input type="text" name="user_name" id="" placeholder="Enter your name" required style="width: 640px;" />
      </div> 
      <div class="input-box">
        <span class="details">Profile Picture</span>
        <input type="file" name="pic" id="" placeholder="Enter your Profile" required class="custom-file-input" style="width: 640px;" accept="image/*" >
      </div>
      <div class="input-box">
        <span class="details">Email</span>
        <input type="email" name="email" id="" placeholder="Enter your email" required style="width: 640px;" />
      </div>
      <div class="input-box">
        <span class="details">Password</span>
        <input type="password" name="password" id="" placeholder="Enter your password" required style="width: 640px;" />
      </div>
      
    </div>
    <div class="button">
      <input type="submit" name="register" value="Register" />
    </div>
  </form>
  <div >
                <p>Already Have an Account <a href="index.php">Click Here...</a></p>
    </div>
</div>
</body>
</html>