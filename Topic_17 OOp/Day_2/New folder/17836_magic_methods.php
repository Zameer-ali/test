<?php

// __set_state magic Method
class _State{
    public $val=null;
    public $val1=null;
    public function __construct()
    {
        $this->val='hi';
        $this->val1=23;
    }
    public static function __set_state($props)
    {
        $obj=new _State();
        $obj->var1 = $props['val'];
        $obj->var2 = $props['val1'];
        return $obj;
    }
}
$obj = new _State();
$obj->val2 = 'Hello world';
$obj->val = 100;

$exp = var_export($obj, true);
eval('$result = ' . $exp . ';');
echo "<pre>";
var_dump($result);
echo "</pre>";



// // magic method string
// class Test
// {
//     public $val=null;

//     public function __construct($val)
//     {
//         $this->val = $val;
//     }

//     public function __toString()
//     {
//         return $this->val;
//     }
// }

// $class = new Test('Hello');
// echo $class;


// // __clone magic method
// class Human
// {
// 	public $first_name;

// 	public function __construct($first_name)
// 	{
// 		$this->first_name = $first_name;
// 	}
// }

// $zameer = new Human('zameer');
// $khan = $zameer;


// $khan->first_name = 'Khan';

// var_dump($zameer);
// var_dump($khan);

// __set magic method
// class Student
//  { 
//      private $name; 
//      private $reg; 
//      public function __construct($name="", $reg=30)
//     { 
//         $this->name = $name;
//         $this->reg = $reg;
//     }

// public function __set($property, $value)
// {
//     if ($property=="reg")
//     {
//         if ($value > 150 || $value < 0) { return; } } $this->$property = $value;
//     }

// public function fun()
// {
//     echo "My name is ".$this->name.",My registration number is ".$this->reg;
// }
// }

// $obj=new Student("Tunio", 20);
// $obj->name = "zameer"; 
// $obj->age = 16; 
// $obj->reg = 160; 
// $obj->fun(); 


// // __isset magic method 
// class Student { 
//     public $gender; private $name; private $reg; 
//     public function __construct($name="", $reg=30, $gender='Male') 
//     {
//         $this->name = $name;
//         $this->reg  = $reg;
//         $this->gender  = $gender;
//     } 

// public function __isset($content)
// {
//     echo $content;
//     echo  isset($this->$content);
// }
// }

// $obj = new Student("Zameer", 70); 
// echo isset($obj->gender),"<br/>";
// echo isset($obj->name),"<br/>";
// echo isset($obj->reg),"<br/>";


?>
