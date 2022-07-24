<?php

require_once('../signup.php');

?><h2 style="background-color: #aaeeaa;color: white; text-align: center; padding: 5px;
width: 40%; margin: auto; border-radius: 5px;"> <?php echo "Project 2"."<br />" ?></h2> <?php

$project2 = new SignUp();
$project2->setAction('#');
$project2->setMethod("POST");

$project2->signUpForm();


?>