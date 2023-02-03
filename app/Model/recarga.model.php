<?php

require_once '../config/conexion.php';

class RecargaModel
{
    public function ListarRecargasRecientes()
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_RECIENTES_RECARGA_TRANSACCION()");
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }

    public function RegistrarRecarga($codvoucher, $monto, $banco, $tipotransaccion, $canalcomunicacion, $voucher, $fechaoperacion, $usuariojugador, $usuarioregistrante, $observacion)
    {
        $stmt = pdoconexion()->prepare("CALL SP_INSERTAR_RECARGA_TRANSACCION(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $codvoucher, PDO::PARAM_STR, 4000);
        $stmt->bindParam(2, $monto, PDO::PARAM_STR, 4000);
        $stmt->bindParam(3, $banco, PDO::PARAM_STR, 4000);
        $stmt->bindParam(4, $tipotransaccion, PDO::PARAM_STR, 4000);
        $stmt->bindParam(5, $canalcomunicacion, PDO::PARAM_STR, 4000);
        $stmt->bindParam(6, $voucher, PDO::PARAM_STR, 4000);
        $stmt->bindParam(7, $fechaoperacion, PDO::PARAM_STR, 4000);
        $stmt->bindParam(8, $usuariojugador, PDO::PARAM_STR, 4000);
        $usuarioregistrante = 1;
        $stmt->bindParam(9, $usuarioregistrante, PDO::PARAM_STR, 4000);

        $stmt->bindParam(10, $observacion, PDO::PARAM_STR, 4000);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function ListarMontoTotalRecargaDelDia()
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_MONTO_TOTAL_RECARGA_TRANSACCION_DIA()");
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }

    public function ListarRecargaUsuario($dni)
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_RECARGA_TRANSACCION_PERSONA(?)");
        $stmt->bindParam(1, $dni, PDO::PARAM_STR, 4000);
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }

    
}