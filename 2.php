<?php
abstract class Fmachine {
    abstract public function getData();

    abstract public function putData();
}

class Airplane extends Fmachine {
    private $code;
    private $name;
    private $capacity;

    public function __construct($code, $name, $capacity) {
        $this->code = $code;
        $this->name = $name;
        $this->capacity = $capacity;
    }

    public function getData() {
        
    }

    public function putData() {
        echo "code=" . $this->code . "<br>";
        echo "name=" . $this->name . "<br>";
        echo "capacity=" . $this->capacity . "<br>";
    }
}


$obj = new Airplane(20, "dikshi", 200);
$obj->putData();

?>