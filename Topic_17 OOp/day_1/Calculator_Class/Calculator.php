<?php

echo "OOP => Assignment #03 Calculator Class";
echo "<hr />";

class Calculator
{
    public $value1 = 0;
    public $value2 = 0;
    public $math = '';

    public function setValue1($Value1)
    {
        $this->value1 = $Value1;
    }
    public function getValue1()
    {
        return $this->value1;
    }

    public function setValue2($Value2)
    {
        $this->value2 = $Value2;
    }
    public function getValue2()
    {
        return $this->value2;
    }

    public function setMath($Math)
    {
        $this->math = $Math;
    }
    public function getMath()
    {
        return $this->math;
    }

    public function evaluate()
    {
        $this->value1;
        $this->value2;
        $this->math;

        if($this->math == '+'){
            echo "Addition is "." ";
            echo $this->value1 + $this->value2;
        }
        else if($this->math == '-'){
            echo "Subtraction is "." ";
            echo $this->value1 - $this->value2;
        }
        if($this->math == '*'){ ?>
           <p style="text-align: center;"> <?php echo "Multiplication is "." ";
            echo $this->value1 * $this->value2;?>
            </p>
            <?php
        }
        if($this->math == '/'){
            echo "Division "." ";
            echo $this->value1 / $this->value2;
        }
    }

}


    $result = new Calculator;

    ?> <h3 style="text-align: center;background-color: #bababa; color: white;
    padding: 5px;width: 30%; margin: auto; border-radius: 5px;"> 
    <?php echo "Calculator"."<br>" ?></h3> <?php

    $result->setValue1(10);
    $result->setMath('*');
    $result->setValue2(20);

    ?> <p style="text-align: center;"> <?php echo $result->getValue1()." ";
    echo $result->getMath()." ";
    echo $result->getValue2()." ";
    ?></p> <?php
    echo $result->evaluate()."<br />";

?>