<?php

require_once '../config/conexion.php';

class UsuarioModel
{
    public function ListarUsuarios()
    {
        $stmt = pdoconexion()->prepare("CALL SP_BUSCAR_USUARIO_PERSONA()");
        $stmt->execute();
        return $stmt->fetchAll();//PDO::FETCH_ASSOC
    }

    public function ValidarUsuario($usuario, $clave)
    {
        $stmt = pdoconexion()->prepare("CALL SP_VALIDAR_USUARIO(?, ?)");
        $stmt->bindParam(1, $usuario, PDO::PARAM_STR, 4000);
        $stmt->bindParam(2, $clave, PDO::PARAM_STR, 4000);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function RegistrarUsuario($usuario, $clave, $nombre, $apellidopat, $apellidomat, $dni, $telefono, $rol)
    {
        $stmt = pdoconexion()->prepare("CALL SP_INSERTAR_USUARIO_PERSONA(?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bindParam(1, $usuario, PDO::PARAM_STR, 4000);
        $stmt->bindParam(2, $clave, PDO::PARAM_STR, 4000);
        $stmt->bindParam(3, $nombre, PDO::PARAM_STR, 4000);
        $stmt->bindParam(4, $apellidopat, PDO::PARAM_STR, 4000);
        $stmt->bindParam(5, $apellidomat, PDO::PARAM_STR, 4000);
        $stmt->bindParam(6, $dni, PDO::PARAM_STR, 4000);
        $stmt->bindParam(7, $telefono, PDO::PARAM_STR, 4000);
        $stmt->bindParam(8, $rol, PDO::PARAM_STR, 4000);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function ObtenerDatosUsuario($usuario)
    {
        $stmt = pdoconexion()->prepare("CALL SP_OBTENER_DATO_USUARIO_PERSONA_BILLETERA_VIRTUAL(?)");
        $stmt->bindParam(1, $usuario, PDO::PARAM_STR, 4000);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}
