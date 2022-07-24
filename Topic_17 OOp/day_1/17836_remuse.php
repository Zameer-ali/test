<?php
class Resume
{

    public $name = "";
    public $father_name = NULL;
    public $gender = null;
    public $country = NULL;


    public $sch = '';
    public $coll = "";
    public $uni = null;
    public $srt_date = "";
    public $end_date = null;


    public function setDet($Name,$Gender,$cnic)
    {
        $this->name = $Name;
        $this->gender = $Gender;
        $this->cnic = $cnic;
    }
    public function getDet()
    {   
        echo "Personal Details:<br>";
        echo "Name: ".$this->name."<br />";
        echo "Gender: ".$this->gender."<br />";
        echo "Cnic: ".$this->cnic."<br />";
        
    }


    public function setEdu($uni,$srt_date,$end_date)
    {
        
        $this->uni = $uni;
       
        $this->srt_date = $srt_date;
        $this->end_date = $end_date;
    }
    public function getEdu()
    {
       echo " <br>Education Details:<br>";
        echo "university: ".$this->uni."<br>";
        echo "Start Date: ".$this->srt_date."<br>";
        echo "End Date: ".$this->end_date."<br>";
        
    }
}


        $zameer = new Resume;
    

        $zameer->setDet('Zameer Ali','Male','4530101442079');
        $zameer->setEdu("University of Sindh",'1/1/2018','31/12/2021');
        

        echo $zameer->getDet();
        echo $zameer->getEdu();
       

       
?>