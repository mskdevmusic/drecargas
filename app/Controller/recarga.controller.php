<?php

require_once '../Model/recarga.model.php';

class RecargaController
{
    public function ListarRecargasRecientes()
    {
        $usuarioController =  new RecargaModel();
        $responseModel = $usuarioController->ListarRecargasRecientes();

        return $responseModel;
    }

    public function RegistrarRecarga()
    {
        $usuarioController =  new RecargaModel();
        $responseModel = $usuarioController->RegistrarRecarga($_POST['codigovoucher'], $_POST['montorecarga'], $_POST['contenido_select_banco'], $_POST['contenido_select_tipo_transaccion'], $_POST['contenido_select_canal_comunicacion'], addslashes(file_get_contents($_FILES['archivovoucher']['tmp_name'])), $_POST['fechaoperacion'], $_POST['idjugador'], 1, $_POST['observacion']);

        return $responseModel;
    }

    public function ListarMontoTotalRecargaDelDia()
    {
        $usuarioController =  new RecargaModel();
        $responseModel = $usuarioController->ListarMontoTotalRecargaDelDia();

        return $responseModel;
    }

    public function ListarRecargaUsuario()
    {
        $usuarioController =  new RecargaModel();
        $responseModel = $usuarioController->ListarRecargaUsuario($_POST['dni']);

        return $responseModel;
    }
    
}
