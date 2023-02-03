<?php

require_once '../config/conexion.php';

class RolModel
{
    public function ListarRol()
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_ROL()");
        $stmt->execute();
        return $stmt->fetchAll(); //PDO::FETCH_ASSOC
    }
}
