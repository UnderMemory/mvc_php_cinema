<?php 

namespace system\lib;

class Util{

    /**
     * Utile pour debugger variables et tableaux
     *
     * @param [type] $_data
     * @param boolean $_continuer
     * @return void
     */
    public static function dd($_data, $_continuer = false)
    {
        echo '<pre>';
        var_dump($_data);
        if($_continuer == false){
            die();
        }
    }
}