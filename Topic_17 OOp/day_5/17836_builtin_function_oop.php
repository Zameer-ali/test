<?php 

	abstract class Hospital{

		abstract public function setDoctors($doctors);
		abstract public function getDoctors();
		abstract public function setRooms($rooms);
		abstract public function getRooms();
		abstract public function setShift($shift);
		abstract public function getShift();

	}

	 interface Doctors{
		public function setDoc_Name($name);
		public function getDoc_Name();
	}
	 interface Patient{
		public function setPat_Name($name);
		public function getPat_Name();
	}

	class MS implements Doctors {
		public function setDoc_Name($name){

		}
		public function getDoc_Name(){
			
		}
	}
	class Hospital_Management_System extends  Hospital implements Doctors, Patient{

		protected $doctor_name = NULL;
		protected $patient_name = NULL;
		protected $total_doctors = 0;
		protected $total_rooms = 0;
		protected $shift = NULL;


		public function setDoc_Name($name){
			$this->doctor_name = $name;
		}
		public function getDoc_Name(){
			return $this->doctor_name;
		}

		public function setPat_Name($name){
			$this->patient_name = $name;
		}
		public function getPat_Name(){
			return $this->patient_name;
		}

		 public function setDoctors($doctors){
			$this->total_doctors = $doctors;
		}
		 public function getDoctors(){
			return $this->total_doctors;
		}
		 public function setRooms($rooms){
			$this->total_rooms = $rooms;
		}
		 public function getRooms(){
			return $this->total_rooms;
		}
		 public function setShift($shift){
			$this->shift = $shift;

		}
		 public function getShift(){
			return $this->shift;
		}

	
	}

$HMS=new Hospital_Management_System();
		echo get_parent_class("Hospital_Management_System");
		echo "<br/>";
		print_r(class_parents("Hospital_Management_System"));
		echo "<br/>";
		var_dump(is_subclass_of($HMS, "Hospital"));
		echo "<br/>";
		$getArray=get_declared_classes();
		foreach ($getArray as $key => $value) {
			echo $key." == ".$value."<br>";
		}
		var_dump( class_exists("Hospital"));
		echo "<br/>";
		$getMethods=get_class_methods("Hospital_Management_System");
		foreach ($getMethods as $key => $value) {
			echo $key." == ".$value."<br>";
		}
?>