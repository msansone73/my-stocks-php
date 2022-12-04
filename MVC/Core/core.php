<?php
namespace MVC\Core;

use MVC\Controllers\homeController;
use MVC\Controllers\LogoutController;
use MVC\Controllers\StocksController;
use MVC\Controllers\UsuariosController;

class Core {
    public function fazRotiamento(){
        
        //var_dump($_SERVER);


        $path_info="";
        if(isset($_SERVER["PATH_INFO"])){
            $path_info=$_SERVER["PATH_INFO"];
        } 


        switch($path_info){
            case null:
            case "/":
            case "/home":
                $homeController = new homeController();
                $homeController->processa();
                break;
            case "/stocks":
                $stocksController = new StocksController();
                $stocksController->processa();
                break;
            case "/usuarios":
                $usuariosController = new UsuariosController();
                $usuariosController->processa();
                break;
            case "/logout":
                $usuariosController = new LogoutController();
                $usuariosController->processa();
                break;
            default:
                echo 'erro 404';
                break;
        }

    }
}