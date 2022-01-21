<?php
$arr = [
    'name' => 'poly',
    'age' => 12,
    'address' => 'Trịnh Văn Bô'
];

$obj = (object) $arr;
// print_r($obj);

class Student{

    public $math, $literal, $english;

    function __construct($ipname, $ipage, $ipaddress)
    {
        $this->name = $ipname;
        $this->age = $ipage;
        $this->address = $ipaddress;
    }

    function setMath($score){
        $this->math = $score;
    }
    function setLiteral($score){
        $this->literal = $score;
    }
    function setEnglish($score){
        $this->english = $score;
    }
    function getAvgScore(){
        $score = ($this->math + $this->literal + $this->english)/3;
        return round($score, 2);
    }
}

// $nam là 1 object mới đc tạo ra từ class Student <=> instance
$nam = new Student("Trần Văn Nam", 21, "Hà Nam");
$nam->isMarried = true;
// thực hiện các hành động của đối tượng
$nam->setMath(7);
$nam->setEnglish(8);
$nam->setLiteral(7.5);

$van = new Student("Nguyễn Thị Vân", 19, "Hà Nội");
$van->setMath(6);
$van->setEnglish(6);
$van->setLiteral(8);

?>
<h2>Họ và tên: <?= $nam->name ?></h2>
<p>Tuổi: <?= $nam->age?></p>
<p>Địa chỉ: <?= $nam->address?></p>
<p>Tình trạng hôn nhân: <?= $nam->isMarried == true ? "Đã kết hôn" : "Độc thân" ?></p>
<p>Điểm trung bình: <?= $nam->getAvgScore() ?></p>
<hr>
<h2>Họ và tên: <?= $van->name ?></h2>
<p>Tuổi: <?= $van->age?></p>
<p>Địa chỉ: <?= $van->address?></p>
<p>Tình trạng hôn nhân: <?= $van->isMarried == true ? "Đã kết hôn" : "Độc thân" ?></p>
<p>Điểm trung bình: <?= $van->getAvgScore() ?></p>