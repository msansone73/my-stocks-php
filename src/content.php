<?php
$acao = 'home';


if (isset($_GET['a'])) {
    $acao=$_GET('a');
}

switch ($acao) {
    case 'home':
        include 'pages/home.php';
        break;

    default:
        include 'pages/home.php';
        break;
}

