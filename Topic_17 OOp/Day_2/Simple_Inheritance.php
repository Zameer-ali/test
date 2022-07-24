<?php 
	/*class A{
		public $firstname = "Ali";
		public $lastname = "Ali";
		
		public function walk(){
			return "<p> I Can Walk</p>";
		}

	}

	class B extends A{
		public $email = NULL;
	}

	class C extends B{

	}


	$A = new A;
	echo "<pre>";
	var_dump($A);
	echo "</pre>";

	echo "<hr/>";

	$B = new B;
	echo "<pre>";
	var_dump($B);
	echo "</pre>";

	echo "<hr/>";

	$C = new C;
	echo "<pre>";
	var_dump($C);
	echo "</pre>";*/
	/*class A{
		public $firstname = "Ali";
		public $lastname = "Ali";
		
		public function walk(){
			return "<p> I Can Walk</p>";
		}

	}

	class B extends A{
		public $email = NULL;
	}*/

	/*class C extends A extends B{
		// PHP Does Not Support Multiple Inheritance	
	}*/


	/*$A = new A;
	echo "<pre>";
	var_dump($A);
	echo "</pre>";

	echo "<hr/>";

	$B = new B;
	echo "<pre>";
	var_dump($B);
	echo "</pre>";

	echo "<hr/>";

	$C = new C;
	echo "<pre>";
	var_dump($C);
	echo "</pre>";*/
	/*class A{
		public $firstname = "Ali";
		public $lastname = "Khan";
		
		public function __construct(){
			echo "<p>PARENT CONSTRUCTOR</p>";
		}

		// public function __construct(){
			// echo "<p>PARENT CONSTRUCTOR 2</p>";
		// }

		public function walk(){
			return "<p> I Can Walk FROM PARENT CLASS</p>";
		}

	}

	class B extends A{
		public $email = NULL;
		public $firstname = "Hidaya";

		public function __construct(){
			parent::__construct();
			echo "<p>CHILD CONSTRUCTOR</p>";
		}

		// public function __construct(){
			// echo "<p>CHILD CONSTRUCTOR 2</p>";
		// }

		public function walk(){
			return "<p> I Can Walk FROM CHILD CLASS</p>";
		}


	}

	$B = new B;
	echo $B->walk();
	echo "FirstName : ".$B->firstname."<br/>";

	echo "<hr/>";

	$A = new A;
	echo "FirstName : ".$A->firstname."<br/>";	
	echo $A->walk();*/

	/*class A{
		public $firstname = "Ali";
		public $lastname = "Khan";
		
		public function __construct(){
			echo "<p>PARENT CONSTRUCTOR</p>";
		}

		// public function __construct(){
			// echo "<p>PARENT CONSTRUCTOR 2</p>";
		// }

		public final function walk(){
			return "<p> I Can Walk FROM PARENT CLASS</p>";
		}

	}

	class B extends A{
		public $email = NULL;
		public $firstname = "Hidaya";

		public function __construct(){
			parent::__construct();
			echo "<p>CHILD CONSTRUCTOR</p>";
		}

		// public function __construct(){
			// echo "<p>CHILD CONSTRUCTOR 2</p>";
		// }

		// public function walk(){
			// return "<p> I Can Walk FROM CHILD CLASS</p>";
		// }


	}

	$B = new B;
	echo $B->walk();
	echo "FirstName : ".$B->firstname."<br/>";

	echo "<hr/>";

	$A = new A;
	echo "FirstName : ".$A->firstname."<br/>";	
	echo $A->walk();*/




	class A{
		public $firstname = "Ali";
		public $lastname = "Khan";
		
		public function __construct(){
			echo "<p>PARENT CONSTRUCTOR</p>";
		}

		// public function __construct(){
			// echo "<p>PARENT CONSTRUCTOR 2</p>";
		// }

		public  function walk(){
			return "<p> I Can Walk FROM PARENT CLASS</p>";
		}

	}

	Final  class B extends A{
		public $email = NULL;
		public $firstname = "Hidaya";

		public function __construct(){
			parent::__construct();
			echo "<p>CHILD CONSTRUCTOR</p>";
		}

		// public function __construct(){
			// echo "<p>CHILD CONSTRUCTOR 2</p>";
		// }

		public function walk(){
			echo parent::walk();
			return "<p> I Can Walk FROM CHILD CLASS</p>";
			
			
		}


	}

	$B = new B;
	echo $B->walk();
	echo "FirstName : ".$B->firstname."<br/>";

	echo "<hr/>";

	$A = new A;
	echo "FirstName : ".$A->firstname."<br/>";	
	echo $A->walk();

?>