<?php

require_once('../signup.php');

?><h2 style="background-color: #aaeeaa;color: white; text-align: center; padding: 5px;
width: 40%; margin: auto; border-radius: 5px;"> <?php echo "Project 1"."<br />" ?></h2> <?php

$project1 = new SignUp();
$project1->setAction("#");
$project1->setMethod("POST");

$project1->signUpForm();

?>