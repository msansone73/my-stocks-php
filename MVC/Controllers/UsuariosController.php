<?php
namespace MVC\Controllers;

use MVC\Model\Usuario;



class UsuariosController{

    public function processa(){

        $u = new Usuario();
        $nome = $u->findById(1);

        $all_usuarios = $u-> getAll();

        $view = 'usuarios';
        require_once(__DIR__.'/../Views/template.php');

    }

}