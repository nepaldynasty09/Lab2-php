<?php
class Box{
    private $length, $breath, $height;

    public function getVolume(){
        return "volume=".$this->length*$this->breath*$this->height."<br>";
    }
    public function __construct($length, $breath, $height){
        $this->length=$length;
        $this->breath=$breath;
        $this->height=$height;
    }
}
class boxWeight extends Box{
    private $weight;

    public function __construct($length, $breath, $height, $weight){
        Box::__construct($length, $breath, $height);
        $this->weight=$weight;
    }

    public function setWeight($weight){
        $this->weight=$weight;
    }
    public function getWeight(){
        echo "weight=".$this->weight."<br>";
    }
}
$box = new boxWeight(10,5,3,20);
echo $box->getVolume();
echo $box->getWeight();
?>