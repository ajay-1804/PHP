<?php
class constructor{
    public $name;
    public $fruits;
    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
$apple = new constructor('ajay');
echo $apple->get_name();
?>