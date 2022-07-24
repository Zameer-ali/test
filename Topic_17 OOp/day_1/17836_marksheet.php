<?php

class Marksheet
{
    public $id = NULL;
    public $name = NULL;
    public $sub1 = NULL;
    public $sub2 = NULL;
    public $sub3 = NULL;
    public $sub4 = NULL;
    public $sub5 = NULL;
    public $per = NULL;
    public $ob_marks = NULL;
    public $total = 500;

    /*  Setting Properties */

    public function setId($Id)
    {
        $this->id = $Id;
    }
    public function setName($Name)
    {
        $this->name = $Name;
    }
    public function setSub1($Sub1)
    {
        $this->sub1 = $Sub1;
    }
    public function setSub2($Sub2)
    {
        $this->sub2 = $Sub2;
    }
    public function setSub3($Sub3)
    {
        $this->sub3 = $Sub3;
    }
    public function setSub4($Sub4)
    {
        $this->sub4 = $Sub4;
    }
    public function setSub5($Sub5)
    {
        $this->sub5 = $Sub5;
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
    public function getName()
    {
        return $this->name;
    }
    public function getSub1()
    {
        return $this->sub1;
    }

    public function getSub2()
    {
        return $this->sub2;
    }
    public function getSub3()
    {
        return $this->sub3;
    }
    public function getSub4()
    {
        return $this->sub4;
    }
    public function getSub5()
    {
        return $this->sub5;
    }
    public function getPercentage()
    {
        return $this->per;
    }

}

    $zameer = new Marksheet;

    $zameer->setId(17836);
    $zameer->setName('Zameer Ali Tunio');
    $zameer->setSub1(55);
    $zameer->setSub2(66);
    $zameer->setSub3(77);
    $zameer->setSub4(88);
    $zameer->setSub5(80);
    $per = $zameer->ob_marks/$zameer->total*100;
    $zameer->setPercentage($per);

    echo "ID ".$zameer->getId()."<br />";
    echo "Name ".$zameer->getName()."<br />";
    echo "Sub1 Marks ".$zameer->getSub1()."<br />";
    echo "Sub2 Marks ".$zameer->getSub2()."<br />";
    echo "Sub3 Marks ".$zameer->getSub3()."<br />";
    echo "Sub4 Marks ".$zameer->getSub4()."<br />";
    echo "Sub5 Marks ".$zameer->getSub5()."<br />";
    echo "Obtained Marks ".$zameer->ob_marks."<br />";
    echo "Total Percentage ".$zameer->getPercentage()."<br />";
    echo "Total Marks ".$zameer->total;

    echo "<br />";
    echo "<br />";

    $shamshir = new Marksheet;

    $shamshir->setId(17836);
    $shamshir->setName('Shamshir Ali Tunio');
    $shamshir->setSub1(55);
    $shamshir->setSub2(66);
    $shamshir->setSub3(77);
    $shamshir->setSub4(88);
    $shamshir->setSub5(80);
    $per = $shamshir->ob_marks/$shamshir->total*100;
    $shamshir->setPercentage($per);

    echo "ID ".$shamshir->getId()."<br />";
    echo "Name ".$shamshir->getName()."<br />";
    echo "Sub1 Marks ".$shamshir->getSub1()."<br />";
    echo "Sub2 Marks ".$shamshir->getSub2()."<br />";
    echo "Sub3 Marks ".$shamshir->getSub3()."<br />";
    echo "Sub4 Marks ".$shamshir->getSub4()."<br />";
    echo "Sub5 Marks ".$shamshir->getSub5()."<br />";
    echo "Obtained Marks ".$shamshir->ob_marks."<br />";
    echo "Total Percentage ".$shamshir->getPercentage()."<br />";
    echo "Total Marks ".$shamshir->total;




?>