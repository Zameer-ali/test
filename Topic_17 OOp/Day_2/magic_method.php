<?php

	/*class Human{
		public $first_name = NULL;

		public function __construct(){
			echo "<p>The Construct ". __CLASS__ ." Is Initiated</p>";
		}
	
		public function __destruct(){
			echo "<p>The Destruct ". __CLASS__ ." Is Destroyed</p>";

		}
	}*/

	/*$obj1 = new Human;
	// $obj2 = new Human;
	unset($obj1);
	$obj2 = new Human;
	echo "End Of File <br/>";*/


	class Human{
		public $first_name = NULL;

		/*public function __construct($firstname){
			echo $firstname."<br/>";
			echo "<p>The Construct ". __CLASS__ ." Is Initiated</p>";
		}*/
		
		public function __construct($firstname){
			$this->first_name = $firstname;
			echo "<p>The Construct ". __CLASS__ ." Is Initiated</p>";
		}

		/*public function __construct($firstname){
			$this->first_name = $firstname;
			echo "<p>The Construct ". __CLASS__ ." Is Initiated</p>";
			 // Polymorphism - Method Overriding Is Not Allowed In Same Class
			 // Polymorphism - Method Overloading Is Not Allowed In PHP Thats Is Why PHP Is Not 100% OOP Supported


		}*/

		public function __destruct(){
			echo "<p>The Destruct ". __CLASS__ ." Is Destroyed</p>";

		}

		public function get_first_name(){
				return $this->first_name;			
		}

		public function walk(){
			return "<p>I Can Walk</p>";
		}

		/*public function walk($abc){
			return "<p>I Can Walk</p>";
			// Polymorphism - Method Overriding Is Not Allowed In Same Class
			 // Polymorphism - Method Overloading Is Not Allowed In PHP Thats Is Why PHP Is Not 100% OOP Supported
		}

		public function walk($a,$b){
			return "<p>I Can Walk</p>";
			// Polymorphism - Method Overriding Is Not Allowed In Same Class
			 // Polymorphism - Method Overloading Is Not Allowed In PHP Thats Is Why PHP Is Not 100% OOP Supported
		}*/

	}

	// $obj = new Human;
	$obj = new Human("Haider Khan");
	echo $obj->get_first_name()."<br/>";
	echo $obj->walk();




?>