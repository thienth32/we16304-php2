<?php

// cú pháp tạo ra 1 lớp/khuôn
class Sinhvien{
    var $mssv;
    var $name;
}

class Oto{

}

// tạo ra 2 object thuộc lớp Sinhvien
$thanh = new Sinhvien();
$thanh->mssv = "PH0001";
$thanh->name = "Nguyễn Văn Thành";

$nam = new Sinhvien();
$nam->mssv = "PH0002";
$nam->name = "Trần Quốc Nam";

$bmw = new Oto();

echo "<pre>";
var_dump($thanh, $nam, $bmw);

echo "<br>";

echo $thanh->name;

?>