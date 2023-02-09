<?php
//normally we can not put same class with same classnam in a single file 
//so to overcome this type of problem in php we can use namespace here 
//here we can define namespace with different name in different file and require that file in the main file and use that same function using namespace name \ classname 



require 'products.php';
require 'testing.php';

$obj = new test\product();
$object = new pro\product();

?>