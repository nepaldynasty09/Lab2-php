<?php
 class Box{
    private  $length,$breadth,$height;
    public function __construct($length,$breadth,$height){
        $this->length=$length;
        $this->breadth=$breadth;
        $this->height=$height;
    }
    public function getVolume(){
        return $this->length*$this->height*$this->breadth;
    }
 }
 class BoxWeight extends Box{
    private $weight;
    public function __construct($length,$breadth,$height,$weight){
        Box::__construct($length,$breadth,$height);
        $this->weight=$weight;
    }
    public function getWeight(){
        return $this->weight;
    }
 }
 $obj=new BoxWeight(10,5,15,30);
 echo "Volume= ".$obj->getVolume()."<br>";
 echo "Weight= ".$obj->getWeight();
?>