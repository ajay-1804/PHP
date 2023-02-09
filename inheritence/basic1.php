<?php
class employee{
    public $name;
    public $age;
    public $salary;
    function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;

    }
    // function __construct(){
    //     echo "employee constructor\n";
    //  }
    function info(){
        echo "employee profile\n";
        echo "employee name: ".$this->name." \n";
        echo "employee age: ".$this->age." \n";
        echo "employee salary: ".$this->salary." \n";
    }
}
class manager extends employee{
    public $totalsalary;
    public $ta = 20000;
    public $phone = 345;
    function info()
    {
        $this->totalsalary = $this->ta + $this->phone + $this->salary;
        echo "manager profile\n";
        echo "employee name : " .$this->name. "\n";
        echo "employee age : " .$this->age. "\n";
        echo "employee salary : " .$this->totalsalary. "\n";
    }
}

$employee1 = new employee("ajay",23,1234);
$employee1->info();

$employee2 = new manager("krish", 34, 12000);
$employee2->info();



?>