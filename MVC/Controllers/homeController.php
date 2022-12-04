<?php
namespace MVC\Controllers;

Class homeController  {

    public function __construct()
    {
        
    }

    public function processa()
    {
        // chama model

        //chama view

        $view='home';
        require_once(__DIR__.'/../Views/template.php');

    }
}