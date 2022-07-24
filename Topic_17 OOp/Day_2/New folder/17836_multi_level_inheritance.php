<?php
class Hospital{
    public $name=null;
    public $doctors=null;
    public function setName($name){
        $this-> name = $name;
    }
    public function setDoctors($doctors){  
        $this-> doctors=$doctors;
    }
    public function getName(){
        echo $this->name;
    }
    public function getDoctors(){
        echo $this->doctors;
    }
}
class Doctor extends Hospital{
    public $doc_name=null;
    public $specialization=null;

    public function setDoc_Name($name){
        $this-> doc_name = $name;
    }
    public function setSpcl($spcl){  
        $this-> specialization=$spcl;
    }
    public function getDoc_Name(){
        echo $this->doc_name;
    }
    public function getSpcl(){
        echo $this->specialization;
    }
}

class Patient extends Doctor{
    public $p_name=null;
    public $fees=null;
    public function setP_Name($name){
        $this-> p_name = $name;
    }
    public function setFees($fees){  
        $this-> fees=$fees;
    }
    public function getP_Name(){
        echo $this->p_name;
    }
    public function getFees(){
        echo $this->fees;
    }
}
$patient=new Patient();
$patient->setP_Name('Zameer');
$patient->setDoc_Name('dr ali arshad');
$patient->setFees(1000);

$patient->getP_Name();
echo "<br>";
$patient->getDoc_Name();
echo "<br>";
$patient->getFees();
echo "<br>";

?>