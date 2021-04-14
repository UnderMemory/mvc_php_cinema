<?php

namespace app\controllers;

class Film{

    function __construct(){
       echo "Contruct controllers Film"; 
    }

    public function index(){
        require PATH_ROOT.'/app/views/film/index.php';
    }
}