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

	

		public function show_result(){
			?>
				<div align="center" style="background-color:lightblue;padding: 10px;">
					<h3>Doctor Name: <?= $this->doctor_name  ?></h3>
					<h3>Patient Name: <?= $this->getPat_Name() ?></h3>
					<h3>Total Doctors: <?= $this->total_doctors ?></h3>
					<h3>Total Rooms: <?= $this->getRooms() ?></h3>
					<h3>Shifts: <?= $this->shift ?></h3>

				</div>
			<?php
		}
	}

$HMS=new Hospital_Management_System();
	$HMS->setDoc_Name('Zameer Ali Tunio');
	$HMS->setPat_Name('Amjad soomro');
	$HMS->setDoctors(10);
	$HMS->setRooms(6);
	$HMS->setShift('Both== Day :: Night');
	$HMS->show_result();







?>