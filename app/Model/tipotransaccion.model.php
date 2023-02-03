<?php

require_once '../config/conexion.php';

class TipotransaccionModel
{
    public function ListarTipoTransaccion()
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_TIPO_TRANSACCION()");
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }
}
