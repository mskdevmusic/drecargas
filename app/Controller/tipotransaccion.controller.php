<?php

require_once '../Model/tipotransaccion.model.php';

class TipotransaccionController
{
    public function ListarTipoTransaccion()
    {
        $usuarioController =  new TipotransaccionModel();
        $responseModel = $usuarioController->ListarTipoTransaccion();

        return $responseModel;
    }
}
