<?php 
class Person{
    public $name="Abdullah Al Mamun";
    public $age=26;
    public function personName(){
        echo "Person Name is: ".$this->name . '<br>';
    }
    public function personAge(){
        echo "Person Age is:" .$this->age . '<br>';
    }
}


$personOne=new Person;
$personOne->name="Abdullah Al Mamun";
$personOne->personName(); 

$personOne->age=26;
$personOne->personAge();


?>