<?php

/* if (!isset($_SESSION['usuario'])) {
    header('Location: app/View/page/login.php');
} */

require './app/Controller/main.controller.php';

$maincontroller =  new MainController();
$maincontroller->getIndex();



/* require './app/Controller/usuario.controller.php';

$maincontroller =  new UsuarioController();
$maincontroller->ValidarUsuario(); */