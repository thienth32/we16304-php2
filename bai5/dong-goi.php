<?php

class DinhNghia{
    private $salary = 5000;
    protected $age = 45;
    public $name = "nguyen thi b";
    public function getSalary(){
        return $this->salary;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }
}

class KeThua extends DinhNghia{

    // public function setAge($newAge){
    //     $this->age = $newAge;
    // }
}

$x = new KeThua();
$x->name = 'thienth';
var_dump($x);


?>
