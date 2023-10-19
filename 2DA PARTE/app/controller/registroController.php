<?php
require_once 'app/model/registromodel.php';
require_once 'app/view/registroview.php';

session_start();

class RegistroController {

    private $model;
    private $view;

    public function __construct() {
        $this->model = new Registromodel();
        $this->view = new RegistroView();
    }

    function showHome() {
        $this->view->showHome();
    }

    function listarAsesinos() {
        $asesinos = $this->model->obtenerAsesinos();
        if(isset($_SESSION['logueado'])){
            $sesion = true;
            $this->view->showAsesinos($asesinos, $sesion);
        }
        else{
            $sesion = false;
            $this->view->showAsesinos($asesinos, $sesion);
        }
    }
    

    function listaVictimas(){
        $victimas = $this->model->Obtenervictimas();
        if(isset($_SESSION['logueado'])) {
            $sesion = true;
            $this->view->showVictimas($victimas, $sesion);
        } else {
            $sesion = false;
            $this->view->showVictimas($victimas, $sesion);
        }
    }

    function detalles($id) {
        $victima = $this->model->ObtenerVictimaPorId($id);
        $asesino = $this->model->obtenerAsesinoPorId($victima->id_asesino);

        $this->view->showDetalles($victima, $asesino);
    }

    function victimasPorAsesino($id){
        $victimas = $this->model->obtenerVictimaporAsesino($id);

        $this->view->mostrarVictimaPorAsesino($victimas);
    }

    function verificarUsuario() {

        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->obtenerUsuario($username);
        
        if($user && password_verify($password, $user->password)) {
            $_SESSION['logueado'] = true;
            $_SESSION['username'] = $username;
            header('Location: admins');
        } else {
            header('Location: home');
        }
    }

    function cerrarSesion() {
        session_destroy();
        header('Location: home');
    }

    function homeadmin(){
        if($_SESSION['logueado']) {
            $asesinos = $this->model->obtenerAsesinos();
    
            $this->view->showHomeAdmin($asesinos);
        } else {
            header('Location: home');
        }
    }

    function agregarAdmin(){
        $this->model->agregarAdmin();
    }

    function agregar($tabla){
        if(isset($tabla)) {
            if($tabla === 'victimas') {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $genero = $_POST['genero'];
                $id_asesino = $_POST['asesino'];
                if(!empty($nombre) && !empty($apellido) && !empty($edad) && !empty($genero) && !empty($id_asesino)) {
                    $this->model->agregarVictima($nombre,$apellido,$edad,$genero,$id_asesino);
                    header('Location: ../admins');
                }
            } else if($tabla === 'asesinos') {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $genero = $_POST['genero'];
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                if(!empty($nombre) && !empty($apellido) && !empty($edad) && !empty($genero) && !empty($peso) && !empty($altura)){
                    $this->model->agregarAsesino($nombre,$apellido,$edad,$genero,$peso,$altura);
                    header('Location: ../admins');
                }
            }
        }
        header('Location: ../admins');
    }

    function eliminar($tabla, $id) {
        $this->model->eliminarPorId($tabla, $id);

        header('Location: ../../admins');
    }

    function formEditar($tabla, $id){
        $asesinos = $this->model->obtenerAsesinos();
        $this->view->formEditar($tabla, $asesinos, $id);
    }

    function actualizar($tabla, $id) {
        if(isset($tabla)) {
            if($tabla = 'victimas') {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $genero = $_POST['genero'];
                $id_asesino = $_POST['asesino'];
                if(!empty($nombre) && !empty($apellido) && !empty($edad) && !empty($genero) && !empty($id_asesino)) {
                    $this->model->actualizarVictima($nombre,$apellido,$edad,$genero,$id_asesino, $id);
                    header('Location: ../../admins');
                }
            } else if($tabla = 'asesinos') {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $edad = $_POST['edad'];
                $genero = $_POST['genero'];
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];
                if(!empty($nombre) && !empty($apellido) && !empty($edad) && !empty($genero) && !empty($peso) && !empty($altura)) {
                    $this->model->actualizarAsesino($nombre,$apellido,$edad,$genero,$peso,$altura, $id);
                    header('Location: ../../admins');
                }
            }
            header('Location: ../../admins');
        }
    }

}

?>