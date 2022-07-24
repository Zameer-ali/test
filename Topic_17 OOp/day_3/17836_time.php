<?php  
class Time{
    private $hour=0;
    private $minute=0;
    private $second=0;
    public function __construct($hour,$minute,$second)
    {
        $this->hour=$hour;
        $this->minute=$minute;
        $this->second=$second;
    }
    public function getHour($hour){
        $this->hour=$hour;

    }
    public function getMinute($minute){
        $this->minute=$minute;

    }
    public function getSecond($second){
        $this->second=$second;

    }
    public function setHour(){
        return $this->hour;
    }
    public function setMinute(){
        return $this->minute;
    }
    public function setSecond(){
        return $this->second;
    }
    public function setTime($hour,$minute,$second){
        $this->hour=$hour;
        $this->minute=$minute;
        $this->second=$second;
    }
    public function Print(){
        echo $this->hour.":".$this->minute.":".$this->second."<br>";
    }
    public function  nextSecond(){
        ++$this->second;
        if($this->second==60){
            ++$this->minute;
            $this->second=0;
            if($this->minute==60){
                ++$this->hour;
                $this->minute=0;
            }
        }
        $this->Print();
    }
}
$Time=new Time(3,32,58);
$Time->nextSecond();


?>