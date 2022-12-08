<?php 
require_once __DIR__.'vendor/autoload.php';
spl_autoload_register( function($nome_arquivo){


    $file= __DIR__. '/' .str_replace("\\", '/', $nome_arquivo) .'.php';
    if (file_exists($file)){
        require_once($file);
    } else {
        echo 'NAO achei - '.$file;
    }

});