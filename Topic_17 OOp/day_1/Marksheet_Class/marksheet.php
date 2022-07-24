<?php
echo "OOP => Assignment #01 Marksheet Class";
echo "<hr />";

class Marksheet
{
    public $id = 0;
    public $full_name = null;
    public $php_marks = 0;
    public $sql_marks = 0;
    public $oop_marks = 0;
    public $percentage = 0.0;
    public $obt_marks = 0;

    /*  Setting Properties */

    public function setId($Id)
    {
        $this->id = $Id;
    }
    public function setFullName($FullName)
    {
        $this->full_name = $FullName;
    }
    public function setPHP($PHP_Marks)
    {
        $this->obt_marks+=$PHP_Marks;
        $this->php_marks = $PHP_Marks;
    }
    public function setSQL($SQL_Marks)
    {
        $this->obt_marks+=$SQL_Marks;
        $this->sql_marks = $SQL_Marks;
    }
    public function setOOP($OOP_Marks)
    {
        $this->obt_marks+=$OOP_Marks;
        $this->oop_marks = $OOP_Marks;
    }
    public function setPercentage($Percentage)
    {
        $this->percentage = $Percentage;
    }

    /* Getting Properties */

    public function getId()
    {
        return $this->id;
    }
    public function getFullName()
    {
        return $this->full_name;
    }
    public function getPHP()
    {
        return $this->php_marks;
    }
    public function getSQL()
    {
        return $this->sql_marks;
    }
    public function getOOP()
    {
        return $this->oop_marks;
    }
    public function getPercentage()
    {
        return $this->percentage;
    }

}

    $object1 = new Marksheet;

    $object1->setId(17838);
    $object1->setFullName('Naseer Ali Soomro');
    $object1->setPHP(67);
    $object1->setSQL(76);
    $object1->setOOP(60);
    $percentage = $object1->obt_marks/300*100;
    $object1->setPercentage($percentage);

    echo "ID ".$object1->getId()."<br />";
    echo "Name ".$object1->getFullName()."<br />";
    echo "PHP Marks ".$object1->getPHP()."<br />";
    echo "SQL Marks ".$object1->getSQL()."<br />";
    echo "OOP Marks ".$object1->getOOP()."<br />";
    echo "Obained Marks ".$object1->obt_marks."<br />";
    echo "Total Percentage ".$object1->getPercentage()."<br />";

    $object2 = new Marksheet;

    $object2->setId(178);
    $object2->setFullName('Yasir Ali Soomro');
    $object2->setPHP(70);
    $object2->setSQL(76);
    $object2->setOOP(50);
    $percentage = $object2->obt_marks/300*100;
    $object2->setPercentage($percentage);

    echo "<hr />";

    echo "ID ".$object2->getId()."<br />";
    echo "Name ".$object2->getFullName()."<br />";
    echo "PHP Marks ".$object2->getPHP()."<br />";
    echo "SQL Marks ".$object2->getSQL()."<br />";
    echo "OOP Marks ".$object2->getOOP()."<br />";
    echo "Obtained Marks ".$object2->obt_marks."<br />";
    echo "Total Percentage ".$object2->getPercentage()."<br />";

?>