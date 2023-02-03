<?php
###################################################################################################
########### EN ESTE ARCHIVO SE DECLARAN VARIABLES DE CONEXION A LA BD Y SUS FUNCIONES #############
########### EDITARLO SEGUN SEA NECESARIO E INCLUIRLO EN LOS ARCHIVOS QUE DESEEN ###################
###################################################################################################

DEFINE("SERVIDOR", "localhost");
DEFINE("USUARIO", "root");
DEFINE("BASEDATOS", "drecargas_apuestatotal");
DEFINE("CLAVE", "");


###### UTILIZAR EL MÉTODO DE CONEXIÓN A SU ELECCIÓN #####
#########################################################


###### MYSQLI ######
function conexion()
{
    $link = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BASEDATOS);
    /* Evalua conexión */
    if (!$link) {
        printf("Error al conectarse a la base de datos");
        exit();
    }
    return $link;
}

###### PDO ######
function pdoconexion()
{
    try {
        $link = new PDO('mysql:host=' . SERVIDOR . ';dbname=' . BASEDATOS, USUARIO, CLAVE);
    } catch (PDOException $e) {
        echo "Verifica la conexion PDO";
    }
    return $link;
}
