<?php

namespace app\controllers;

use system\lib\Util;
use app\models\Film as ModelsFilm;


class Film{

    function __construct(){
    //    echo "Contruct controllers Film"; 
    }

    public function index(){

        require PATH_ROOT.'/app/models/Film.php';
        $modelFilm = new ModelsFilm;
        $films = $modelFilm->all();
        Util::dd($films);

        $titre = "Les films";
        $page = PATH_ROOT.'/app/views/film/index.php';
        require PATH_ROOT.'/app/views/base.php';
    }
}