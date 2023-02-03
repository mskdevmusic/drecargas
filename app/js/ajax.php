<?php
require_once '../Controller/recarga.controller.php';
require_once '../Controller/tipotransaccion.controller.php';
require_once '../Controller/banco.controller.php';
require_once '../Controller/canalcomunicacion.controller.php';
require_once '../Controller/main.controller.php';
require_once '../Controller/usuario.controller.php';
require_once '../Controller/rol.controller.php';


class Ajaxcontroller
{
    public function obtenerRecargasRecientes()
    {
        $controller = new Recargacontroller();
        $response = $controller->ListarRecargasRecientes();
        echo json_encode($response);
    }

    public function obtenerTipoTransacciones()
    {
        $controller = new TipotransaccionController();
        $response = $controller->ListarTipoTransaccion();
        echo json_encode($response);
    }

    public function obtenerBancos()
    {
        $controller = new BancoController();
        $response = $controller->ListarBancos();
        echo json_encode($response);
    }

    public function obtenerCanalComunicacion()
    {
        $controller = new CanalcomunicacionController();
        $response = $controller->ListarCanalComunicacion();
        echo json_encode($response);
    }

    public function obtenerRecargasDelDia()
    {
        $controller = new Recargacontroller();
        $response = $controller->ListarMontoTotalRecargaDelDia();
        echo json_encode($response);
    }

    public function registrarRecargaTransaccion()
    {
        $controller = new Recargacontroller();
        $response = $controller->RegistrarRecarga();
        echo json_encode($response);
    }

    public function validarUsuario()
    {
        $controller = new UsuarioController();
        $response = $controller->ValidarUsuario();
        $responsejson = json_encode($response);

        if ($response[0]['MENSAJE'] == 'INGRESO EXITOSAMENTE') {
            session_start();
            $_SESSION['usuario'] = $_POST['nombre'];
        }

        echo $responsejson;
    }

    public function registrarUsuario()
    {
        $controller = new UsuarioController();
        $response = $controller->RegistrarUsuario();
        $responsejson = json_encode($response);

        echo $responsejson;
    }

    public function obtenerRoles()
    {
        $controller = new RolController();
        $response = $controller->ListarRol();
        echo json_encode($response);
    }

    public function listarRecargasUsuario()
    {
        $controller = new Recargacontroller();
        $response = $controller->ListarRecargaUsuario();
        echo json_encode($response);
    }

    public function obtenerDatosUsuario()
    {
        $controller = new UsuarioController();
        $response = $controller->ObtenerDatosUsuario();

        echo json_encode($response);
    }
}

$ajax = new Ajaxcontroller();


if (isset($_POST['listarultimasrecargas'])) {
    $ajax->obtenerRecargasRecientes();
}

if (isset($_POST['listartipotransacciones'])) {
    $ajax->obtenerTipoTransacciones();
}

if (isset($_POST['listarbancos'])) {
    $ajax->obtenerBancos();
}

if (isset($_POST['listarcanalcomunicacion'])) {
    $ajax->obtenerCanalComunicacion();
}

if (isset($_POST['listarrecargasdeldia'])) {
    $ajax->obtenerRecargasDelDia();
}

if (isset($_POST['registrarrecarga'])) {
    $ajax->registrarRecargaTransaccion();
}

if (isset($_POST['validarusuario'])) {
    $ajax->validarUsuario();
}

if (isset($_POST['listarroles'])) {
    $ajax->obtenerRoles();
}

if (isset($_POST['registrarusuario'])) {
    $ajax->registrarUsuario();
}

if (isset($_POST['listarrecargausuario'])) {
    $ajax->listarRecargasUsuario();
}

if (isset($_POST['listardatosusuario'])) {
    $ajax->obtenerDatosUsuario();
}





