<?php
require_once 'vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">

    <title>My Control</title>
</head>

<body>

    <?php
    if (!isset($_SESSION["USUARIO"])) {
        require_once('login.php');
    } else {
        require_once('menu.php');
        if (!isset($view)) {
            echo 'Variável $view não definida';
        } else {
            require_once('pages/' . $view . '.php');
        }
    }
    ?>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   
</body>

</html>