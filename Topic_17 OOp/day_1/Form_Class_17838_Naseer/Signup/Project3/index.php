<?php

require_once('../signup.php');

?><h2 style="background-color: #aaeeaa;color: white; text-align: center; padding: 5px;
width: 40%; margin: auto; border-radius: 5px;"> <?php echo "Project 3"."<br />" ?></h2> <?php

$project3 = new SignUp();
$project3->setAction("#");
$project3->setMethod("POST");

$project3->signUpForm();

?>