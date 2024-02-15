<?php
    interface Num{
        function add($x,$y);
        function diff($x,$y);
    }
    class Calc implements Num{
        function add($x,$y){
            return $x+$y;
        }
        function diff($x,$y){
            return $x-$y;
        }
    }
    $obj=new Calc;
    echo"sum= ".$obj->add(10,20);
    echo"<br>diff= ".$obj->diff(10,20);
?>
