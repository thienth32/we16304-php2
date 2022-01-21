<?php
trait dbtrait{
    public function getConnect(){
        return new PDO("", "", "");
    }
}

abstract class Model{

    // mong muốn tất cả các class kế thừa tôi, sẽ có các hàm getAll()
    abstract public function getAll(): string;

    public function delete(){
        return "delete model";
    }
}

interface OrderProcess{
    
    public function checkProcessState();
    public function updateProcessState();
}

interface Payment{
    
    public function paymentTransaction();
}

class User extends Model implements Payment{
    use dbtrait;
    public function getAll(): string{
        return "something";
    }

    public function paymentTransaction()
    {
        
    }
}

class Product extends Model implements OrderProcess{
    use dbtrait;
    public function getAll(): string{
        return "product model";
    }

    public function checkProcessState()
    {
        
    }

    public function updateProcessState()
    {
        
    }
}

class Order extends Model implements OrderProcess, Payment{
    public function getAll(): string{
        return "something";
    }

    public function checkProcessState()
    {
        
    }

    public function updateProcessState()
    {
        
    }

    public function paymentTransaction()
    {
        
    }
}

?>