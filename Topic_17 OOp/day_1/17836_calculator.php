<?php
class Calculator
{
    public $num1 =10;
    public $num2 =20;
    public $operator = '+';


  

    public function calculate()
    {
        $this->num1; $this->num2; $this->operator;

        if($this->operator == '+'){
            return "Addition: ".$this->num1 + $this->num2;
        }
        else if($this->operator == '/'){
            echo "Division: ". $this->num1 / $this->num2;
        }
        else if($this->operator == '-'){
            echo "Subtraction: ".$this->num1 - $this->num2;
        }
        else if($this->operator == '*'){
           echo "Multiplication: ".$this->num1 * $this->num2;
        }
    }

}


    $output = new Calculator;
    print_r($output->calculate()) ;


?>