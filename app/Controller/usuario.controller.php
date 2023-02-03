<?php

require_once '../Model/usuario.model.php';
require_once '../config/hashing.php';

class UsuarioController
{
    public function ListarUsuarios()
    {
        $usuarioController =  new UsuarioModel();
        $responseModel = $usuarioController->ListarUsuarios();

        return $responseModel;
    }

    public function ValidarUsuario()
    {
        $usuarioController =  new UsuarioModel();
        $responseModel = $usuarioController->ValidarUsuario($_POST['nombre'], crypt($_POST['password'], SECRET_KEY));

        return $responseModel;
    }

    public function RegistrarUsuario()
    {
        $usuarioController =  new UsuarioModel();
        $responseModel = $usuarioController->RegistrarUsuario($_POST['txtmodalusuariousuario'], crypt($_POST['txtmodalclaveusuario'], SECRET_KEY), $_POST['txtmodalnombreusuario'], $_POST['txtmodalapepatusuario'], $_POST['txtmodalapematusuario'], $_POST['txtmodaldniusuario'], $_POST['txtmodaltelefonousuario'], 3);

        return $responseModel;
    }

    public function ObtenerDatosUsuario()
    {
        $usuarioController =  new UsuarioModel();
        $responseModel = $usuarioController->ObtenerDatosUsuario($_POST['dni']);

        return $responseModel;
    }
    
}
