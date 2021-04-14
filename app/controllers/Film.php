<?php

namespace app\controllers;

class Film{

    function __construct(){
    //    echo "Contruct controllers Film"; 
    }

    public function index(){
        $titre = "Les films";
        $page = PATH_ROOT.'/app/views/film/index.php';
        require PATH_ROOT.'/app/views/base.php';
    }
}