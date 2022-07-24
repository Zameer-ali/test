<?php

	class Cake{
		public $bakery 		= "The Bombay Bakery";
		public $customer 	= NULL;
		public $flavor 		= NULL;
		public $pound       = NULL;
		public $frosting_text = NULL;


		public function __construct($customer){
			$this->customer = $customer;
			echo "<p>THE Constructor Class <b>".__CLASS__."</b> Was Initiated</p>";			
		}


		public function set_customer($customer){
			$this->customer = $customer;
		}

		public function set_flavor($flavor){
			$this->flavor = $flavor;
		}

		public function set_pound($pound){
			$this->pound = $pound;
		}

		public function set_frost_text($text){
			$this->frosting_text = $text;
		}

		public function get_customer(){
			return $this->customer;
		}

		public function get_flavor(){
			return $this->flavor;
		}

		public function get_pound(){
			return $this->pound;
		}

		public function get_frost_text(){
			return $this->frosting_text;
		}

		public function bake(){
			return "<p><b>Bake:</b> The <b>". $this->get_flavor()."</b> Flavor ".__CLASS__."  Of ".$this->get_pound()." Pound Was Baking In ".$this->bakery."</p>";
		}

		public function frost(){
			return "<p><b>Frost:</b> The <b>". $this->get_flavor()."</b> Flavor ".__CLASS__."  Of ".$this->get_pound()." Pound With The Text Of [" .$this->get_frost_text()."] Was Baking In".$this->bakery."</p>";
		}

		public function get_cake(){
			return "<p>Here You Can Get Your Cake</p>";
		}

	}

	class BirthdayCake extends Cake{

		public $bakery = "Black & Brown Bakery";

		public function bake(){
			echo parent::bake();
			return "<p><b>Bake:</b> The <b>". $this->get_flavor()."</b> Flavor ".__CLASS__."  Of ".$this->get_pound()." Pound Was Baking In ".$this->bakery." Child</p>";
		}

		public function frost(){
			return "<p><b>Frost:</b> The <b>". $this->get_flavor()."</b> Flavor ".__CLASS__."  Of ".$this->get_pound()." Pound With The Text Of [" .$this->get_frost_text()."] Was Baking In".$this->bakery." Child</p>";
		}

		public function set_cake($flavor,$pound,$text){
			$this->flavor = $flavor;
			$this->pound = $pound;
			$this->frosting_text = $text;
		}

	}

	/*$cake = new Cake("Ali Ahmed");
	$cake->set_flavor("Chocolate");
	$cake->set_frost_text("Happy Birthday");
	$cake->set_pound(5);
	echo "<p>The Customer <b>". $cake->get_customer() ."</b> ORDER FROM ". $cake->bakery ."</p>";
	echo $cake->bake();
	echo $cake->frost();
	echo $cake->get_cake();*/

	/*$cake = new BirthdayCake("Ali Ahmed");
	$cake->set_customer("Haider Khan");
	echo "<p>The Customer <b>". $cake->get_customer() ."</b> ORDER FROM ". $cake->bakery ."</p>";
	$cake->set_flavor("Chocolate");
	$cake->set_frost_text("Happy Birthday");
	$cake->set_pound(5);
	$cake->set_cake("Lemon", 10, "Happy Birthday");
	echo $cake->bake();
	echo $cake->frost();*/







?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Parent</h1>
	<?php
		$cake = new Cake("Ali Ahmed");
		$cake->set_flavor("Chocolate");
		$cake->set_frost_text("Happy Birthday");
		$cake->set_pound(5);
		echo "<p>The Customer <b>". $cake->get_customer() ."</b> ORDER FROM ". $cake->bakery ."</p>";
		echo $cake->bake();
		echo $cake->frost();
		echo $cake->get_cake();
	?>
	<h1>Child</h1>
	<?php 
	$cake = new BirthdayCake("Ali Ahmed");
	$cake->set_customer("Haider Khan");
	echo "<p>The Customer <b>". $cake->get_customer() ."</b> ORDER FROM ". $cake->bakery ."</p>";
	$cake->set_flavor("Chocolate");
	$cake->set_frost_text("Happy Birthday");
	$cake->set_pound(5);
	$cake->set_cake("Lemon", 10, "Happy Birthday");
	echo $cake->bake();
	echo $cake->frost();
	?>





</body>
</html>