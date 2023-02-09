<?php

//static method can be called without creating creating the instance of the class 
//and it can be declared using the (::) classname:: methodname();
class greeting {
    public static function welcome(){
        echo "hello world \n";
    }
    public static function greet(){
        echo "good morning \n";
    }
}

greeting::welcome();
greeting::greet();
?>