<?php

require_once '../config/conexion.php';

class CanalcomunicacionModel
{
    public function ListarCanalComunicacion()
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_CANAL_COMUNICACION()");
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }
}
