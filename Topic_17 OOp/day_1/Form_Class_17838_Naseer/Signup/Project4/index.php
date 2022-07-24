<?php

require_once('../signup.php');

?><h2 style="background-color: #aaeeaa;color: white; text-align: center; padding: 5px;
width: 40%; margin: auto; border-radius: 5px;"> <?php echo "Project 4"."<br />" ?></h2> <?php

$project4 = new SignUp();
$project4->setAction("#");
$project4->setMethod("POST");

$project4->signUpForm();

?>