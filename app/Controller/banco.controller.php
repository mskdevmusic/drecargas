<?php

require_once '../Model/banco.model.php';

class BancoController
{
    public function ListarBancos()
    {
        $usuarioController =  new BancoModel();
        $responseModel = $usuarioController->ListarBancos();

        return $responseModel;
    }
}
