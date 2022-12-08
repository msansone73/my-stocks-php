<?php

namespace MVC\Model;

use PDO;
use MVP\Configuracoes;

class Usuario{

    public $id;
    public $name;
    public $email;
    public $password;
    public $role;


    public function __construct(){

    }

    function getConn(){
        return new PDO("mysql:dbname=".$GLOBALS['DB_NAME'].";host=".$GLOBALS['DB_HOST']
        , $GLOBALS['DB_USER']
        , $GLOBALS['DB_PASS']);
    }

    public function findById($id){


        //$conn = new PDO("mysql:dbname=".$GLOBALS['DB_NAME'].";host=".$GLOBALS['DB_HOST'], $GLOBALS['DB_USER'] , $GLOBALS['DB_PASS']);
        $conn = $this->getConn();

        $cmd = $conn->prepare("select * from usuario");
        $cmd->execute();
        $res = $cmd->fetchall(PDO::FETCH_ASSOC);

        return $res[0]['name'];
    }


    public function getAll(){


        //$conn = new PDO("mysql:dbname=".$GLOBALS['DB_NAME'].";host=".$GLOBALS['DB_HOST'], $GLOBALS['DB_USER'] , $GLOBALS['DB_PASS']);
        $conn = $this->getConn();

        $cmd = $conn->prepare("select * from usuario");
        $cmd->execute();
        $res = $cmd->fetchall(PDO::FETCH_ASSOC);

        return $res;
    }


}