<?php
class Animal{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function hello(){
        return "hello 500 anh em, tôi tên là " . $this->name;
    }
}

class Duck extends Animal{
    function __construct($name, $age, $hairColor)
    {
        parent::__construct($name, $age);
        $this->hairColor = $hairColor;
    }

    public function hello()
    {
        return "Xin chào, tôi tên là ". $this->name . ", tôi có màu lông là màu " . $this->hairColor;
    }
}

$x = new Duck('donal', 50, 'yellow');
var_dump($x);
echo "<br>";
echo $x->hello();

?>