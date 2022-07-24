<?php 
class Author{
        private $name;
        private $email;
        private $gender;

        function __construct($name,$email,$gender)
        {
            $this->name=$name;
            $this->email=$email;
            $this->gender=$gender;
        }
        function getName(){
            return $this->name;
        }
        function getEmail(){
            return $this->email;
        }
       public function getGender(){
            return $this->gender;
        }
        function setGender($gender){
            $this->gender=$gender;
        }

        function Print(){
            echo "Author Name:".$this->name;
            echo "<br>Author Mail:".$this->email;
            echo "<br>Author Gender:".$this->gender;
        }
}
class Book extends Author{
    private $name;
    private $author;
    private $price;
    private $qntyInStock=0;
    public function setName($name){
        $this->name=$name;
    }
    public function setAuthor($author){
        $this->author=parent::getName()??$author;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function setQnty($qnty){
        $this->qntyInStock=$qnty;
    }
    public function getName(){
        return $this->name;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getQnty(){
        return $this->qntyInStock;
    }
    function Print(){
        
        echo "Book name: ".$this->name." by " .parent::getName()." (".$this->getGender().") ".$this->getEmail();
    }
    function getAuthorName(){
        echo "<br>".parent::getName()."<br>";
    }

}

$Book=new Book('Zameer ali Tunio','zame@gmail.com','male');
$Book->setName('God Father');
$Book->setPrice(3000);
$Book->setQnty(40);
$Book->Print();
$Book->getAuthorName();

?>