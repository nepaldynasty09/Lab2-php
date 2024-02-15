<?php
class Number{
    private $x,$y,$z;
    public function __construct($x,$y,$z){
        $this->x=$x;
        $this->y=$y;
        $this->z=$z;
    }
    public function getMax(){
        if($this->x>$this->y&&$this->x>$this->y)
            return $this->x;
        else if($this->y>$this->z)
            return $this->y;
        else
            return $this->z;
    }
}
$obj=new Number(10,20,25);
echo $obj->getMax();
?>