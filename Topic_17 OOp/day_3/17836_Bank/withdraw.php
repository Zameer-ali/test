<?php 

	require_once("require/form_class.php");

	$form = new Form;
	$form->set_action("process.php");
	$form->set_method("POST");
	$form->withDraw();

?>