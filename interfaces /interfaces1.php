<?php
//using interface we can inherit multiple class at a time to a single class 
//to do this we make all the above class to the interface 
//In interface we can not define the properties 
//we can not make object of the interface class
//if so then it will show the error 

interface parent1{
    // protected $a; can not declare the member variable
    //only method we can declare

    function calc($a, $b); //if putting the any access modifier before the function then it will show error 
}

interface parent2{
    function sub($c, $d);
}

class childclass implements parent1,parent2{
    public function calc($a,$b){
        echo $a + $b."\n";
    }
    public function sub($c,$d){
        echo $c - $d."\n";
    }
}
//$test = new parent1();//will show error

$test = new childclass();
$test->calc(20, 35);
$test->sub(98, 34);
?>