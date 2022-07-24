<?php 

	require_once("require/form_class.php");

	$form = new Form;
	$form->set_action("login_process.php");
	$form->set_method("POST");
	$form->forgot_pass_form();

?>