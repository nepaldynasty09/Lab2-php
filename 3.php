<?php
    class Rectangle{
        private $length,$breadth,$area;
        function __construct($length,$breadth)
        {
            $this->length=$length;
            $this->breadth=$breadth;
        }
        function computeArea(){
            $this->area=$this->length*$this->breadth;
        }
        function displayArea(){
            echo"Area= $this->area";
        }
    }
    $obj=new Rectangle(10,20);
    $obj->displayArea();
?>