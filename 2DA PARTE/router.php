<?php
// require_once('admin.php');
require_once 'app/controller/registroController.php';

$action = 'home';

if(!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

$controller = new RegistroController();

switch($params[0]){
    case 'home': {
        $controller->showHome();
    }; break;
    case 'listaAsesinos': {
        $controller->listarAsesinos();
    }; break;
    case 'listaVictimas': {
        $controller->listaVictimas();
    }; break;
    case 'details': {
        $controller->detalles($params[1]);
    }; break;
    case 'victimasPorAsesino': {
        $controller->victimasPorAsesino($params[1]);
    }; break;
    //case 'admin': 
    //$controller->agregarAdmin();break;funcion utilizada para insertar la contraseña hasheada en la DB.
    // SECCION ADMIN
    case 'iniciar': {
        $controller->verificarUsuario();
    }; break;
    case 'cerrar': {
        $controller->cerrarSesion();
    }; break;
    case 'admins': {
        $controller->homeadmin();
    }; break;
    case 'agregar': {
        $controller->agregar($params[1]);
    }; break;
    case 'eliminar': {
        $controller->eliminar($params[1], $params[2]);
    } break;
    case 'editar':{
        $controller->formEditar($params[1], $params[2]);
    }; break;
    case 'actualizar': {
        $controller->actualizar($params[1], $params[2]);
    }; break;
}
?>