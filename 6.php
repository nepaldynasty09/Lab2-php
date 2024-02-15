<?php
class Student{
    private $roll_no;
     public function __construct($roll_no){
        $this->roll_no = $roll_no;
     }
     public function getData(){
        echo "roll no.=".$this->roll_no."<br>";
     }
}
class Test extends Student{
    private $mark1;
    private $mark2;

    public function __construct($roll_no,$mark1, $mark2){
        Student::__construct($roll_no);
        $this->mark1 = $mark1."<br<>";
        $this->mark2 = $mark2."<br>";
    }
    public function getData(){
        Student::getData();
        echo "mark1=".$this->mark1;
        echo "mark2=".$this->mark2;
    }
}
class Result extends Test{
    private $total;
    public function __construct($roll_no,$mark1,$mark2,$total){
        Test::__construct($roll_no,$mark1,$mark2);
        $this->total = $total."<br>";
    }
    public function getData(){
        Test::getData();
        echo "total=".$this->total;
    }
}
$result=new Result(5,31,40,71);
$result->getData();
?>