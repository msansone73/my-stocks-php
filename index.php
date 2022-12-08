<?php

require_once __DIR__.'autoload.php';
require_once __DIR__.'/MVC/Configuracoes/DBConfiguracoes.php';
session_start();

use MVC\Core\Core;


    $c = new Core();
    $c->fazRotiamento();
