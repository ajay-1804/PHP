<?php
//when we want to reuse a function inside mare than one class then we define a trait outside the class and we can reuse that in the all different class 
//advantage : improve code readibility and save extra spaces 
//any number of traits i can made in side our code 

trait hello{
    public function sayhello(){
        echo "hello everyone";
    }
}

class base {
    use hello;
}
class base2{
    use hello;
}

$test = new base();
$test->sayhello();
$test2 = new base2();
$test2->sayhello();
?>