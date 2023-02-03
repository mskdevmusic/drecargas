<?php

require_once '../config/conexion.php';

class BancoModel
{
    public function ListarBancos()
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_BANCO()");
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }
}
