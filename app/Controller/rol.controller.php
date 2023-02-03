<?php

require_once '../Model/rol.model.php';

class RolController
{
    public function ListarRol()
    {
        $usuarioController =  new RolModel();
        $responseModel = $usuarioController->ListarRol();

        return $responseModel;
    }
}
