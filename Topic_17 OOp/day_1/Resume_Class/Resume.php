<?php

echo "OOP => Assignment #02 Resume Class";
echo "<hr />";

class Resume
{
    /* Personal Information */

    public $full_name = "";
    public $father_name = NULL;
    public $gender = null;
    public $country = NULL;

    /* Educational Information */

    public $school = '';
    public $college = "";
    public $university = null;
    public $start_date = "";
    public $end_date = null;

    /* Contact Information */

    public $email = null;
    public $phone_no = NULL;
    public $address = "";


    /* methods to set & get Personal Information */

    public function setPersonal($Full_Name,$Father_Name,$Gender,$Country)
    {
        $this->full_name = $Full_Name;
        $this->father_name = $Father_Name;
        $this->gender = $Gender;
        $this->country = $Country;
    }
    public function getPersonal()
    {
        echo "Full Name: ".$this->full_name."<br />";
        echo "Father Name: ".$this->father_name."<br />";
        echo "Gender: ".$this->gender."<br />";
        echo "Country: ".$this->country."<br />";
        // return $this->full_name."<br />".$this->father_name."<br />".$this->gender."<br />".
        // $this->country."<br />";
    }

    /* methods to set & get Educational Information */

    public function setEducation($School,$College,$University,$Start_Date,$End_Date)
    {
        ?> <h3 style="text-align: center; background-color: black; color: white; padding: 5px;
            border-radius: 5px;"> <?php echo "Personal Information"."<br>" ?></h3> <?php
        $this->school = $School;
        $this->college = $College;
        $this->university = $University;
        $this->start_date = $Start_Date;
        $this->end_date = $End_Date;
    }
    public function getEducation()
    {
        ?> <h3 style="text-align: center; background-color: black; color: white; padding: 5px;
            border-radius: 5px"> <?php echo "Educational Information"."<br>" ?></h3> <?php
        echo "School From: ".$this->school."<br />";
        echo "College From: ".$this->college."<br />";
        echo "University From: ".$this->university."<br />";
        echo "Education Start From: ".$this->start_date."<br />";
        echo "Education End at: ".$this->end_date."<br />";
        echo "<br />";
        // return $this->school."<br />".$this->college."<br />".$this->university.
        // "<br />".$this->start_date."<br />".$this->end_date."<br />";
    }

    /* m:ethods to set & get Contact Information */
    
    public function setContact($Email,$Phone_no,$Address)
    {
        $this->email = $Email;
        $this->phone_no = $Phone_no;
        $this->address = $Address;
    }
    public function getContact()
    {
        ?> <h3 style="text-align: center;background-color: black; color: white; 
        padding: 5px; border-radius: 5px;"> <?php echo "Contact Information"."<br>" ?></h3> <?php
        echo "Email Address: ".$this->email."<br />";
        echo "Phone No: ".$this->phone_no."<br />";
        echo "Residential Address: ".$this->address."<br />";
        // return $this->email.
        // "<br />".$this->phone_no."<br />".$this->address."<br />";
    }

}


        $naseer = new Resume;

        ?> <h3 style="text-align: center;background-color: #bababa; color: white;
        padding: 5px;width: 30%; margin: auto; border-radius: 5px;"> 
        <?php echo "Object 1"."<br>" ?></h3> <?php

        $naseer->setPersonal('Naseer Ali','Abdul Karim','Male','Pakistan');
        $naseer->setEducation('Mithiani','N/Feroze','USindh','10-03-2004','19-01-2022');
        $naseer->setContact('naseer@gmail.com','+92305-123456789','Mithiani, Naushahro Feroze,
        Sindh, Pakistan','Pakistan');

        echo $naseer->getPersonal();
        echo $naseer->getEducation();
        echo $naseer->getContact();

        echo "<hr />";

        $Yasir = new Resume;
        ?> <h3 style="text-align: center;background-color: #bababa; color: white; 
        padding: 5px; width: 30%; margin: auto; border-radius: 5px;"> 
        <?php echo "Object 2"."<br>" ?></h3> <?php

        $Yasir->setPersonal('Yasir Ali','Abdul Karim','Male','Pakistan');
        $Yasir->setEducation('Mithiani','N/Feroze','USindh','10-04-2006','Continue');
        $Yasir->setContact('yasir@gmail.com','+92305-123456789','Mithiani, Naushahro Feroze,
        Sindh, Pakistan','Pakistan');

        echo $Yasir->getPersonal();
        echo $Yasir->getEducation();
        echo $Yasir->getContact();

?>