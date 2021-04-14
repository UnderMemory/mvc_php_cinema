<?php

namespace app\controllers;

class Home{

    function __construct(){
       echo "Contruct Home"; 
    }

    public function index(){
        require PATH_ROOT.'/app/views/home/index.php';
    }
}