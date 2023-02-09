<?php
class a{
    private $a=90;
    function call(){
        return $this->a;
    }
}

class b extends a {
    public $a=10;
    function call(){
        return parent::call();
    }   
}

$dof = new b();
echo $dof->call();
?>