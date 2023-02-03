<?php

require_once '../Model/canalcomunicacion.model.php';

class CanalcomunicacionController
{
    public function ListarCanalComunicacion()
    {
        $usuarioController =  new CanalcomunicacionModel();
        $responseModel = $usuarioController->ListarCanalComunicacion();

        return $responseModel;
    }
}
