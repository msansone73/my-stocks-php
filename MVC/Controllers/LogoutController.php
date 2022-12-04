<?php

namespace MVC\Controllers;

Class LogoutController {

    public function processa()
    {
        // chama model

        //chama view
    
        session_unset();
        session_destroy();

        $view='home';
        require_once(__DIR__.'/../Views/template.php');

    }

}