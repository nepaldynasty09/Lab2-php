<?php
interface Shape {
    public function get_data();
    public function display_area();
}

class Rectangle implements Shape {
    private $length;
    private $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function get_data() {
        // empty method
    }

    public function display_area() {
        echo "Area of Rectangle: " . ($this->length * $this->width) . "\n";
    }
}

class Square implements Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function get_data() {
        // empty method
    }

    public function display_area() {
        echo "Area of Square: " . ($this->side * $this->side) . "\n";
    }
}

$rectangle = new Rectangle(5.0, 3.0);
$square = new Square(4.0);

$rectangle->get_data();
$rectangle->display_area();

$square->get_data();
$square->display_area();
?>
