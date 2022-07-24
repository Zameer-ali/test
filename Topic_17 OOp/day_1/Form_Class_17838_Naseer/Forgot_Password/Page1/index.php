<?php

require_once('../forgot_password.php');

?><h2 style="background-color: #aaeeaa;color: white; text-align: center; padding: 5px;
width: 40%; margin: auto; border-radius: 5px;"> <?php echo "Page 1"."<br />" ?></h2> <?php

$page1 = new ForgotPassword();

$page1->setAction('#');
$page1->setMethod('POST');

$page1->forgotPasswordForm();

?>