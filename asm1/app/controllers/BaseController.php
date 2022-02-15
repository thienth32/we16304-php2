<?php
namespace App\Controllers;
use eftec\bladeone\BladeOne;
class BaseController{
    protected function render($viewFile, $data = []){

        $blade = new BladeOne('./app/views', './storage', BladeOne::MODE_DEBUG);
        echo $blade->run($viewFile, $data);

    }
}
?>