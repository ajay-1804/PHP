<?php
//abstract class can not create object 
//to access to those property in the abstrach class 
//we can done that by inheritence 
//first we define that method in the child class and then we can use there 

//in abstract class there must be at least  abstract method 

//abstract means uncomplete method 

abstract class parentclass{
    public $name;

    abstract protected function calc($a, $b);

}
class childclass  extends parentclass{
    

    public function calc($a, $b){
        //we can make here public 
        echo "hello\n";
        echo ($a+$b)."\n";

    }

    
}
$test = new childclass();
$test->calc(12, 34);



// $test = new parentclass(); can not do this type of stuff after making class abstract 

/*
use:
personal info (main abstract class)
fees dept 
student personal information
cycle stand 
 */







?>