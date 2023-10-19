<?php 
require_once 'config.php';

class Registromodel {
    private $conex;
    public function __construct() {
        $host = HOST;
        $dbname = DB_NAME;
        $charset = CHARSET;
        $user = USER;
        $password = PASSWORD;

        $string = "mysql:host=$host;dbname=$dbname;charset=$charset";

        $this->conex = new PDO($string, $user, $password);
    }

    function obtenerAsesinos() {
        $consulta = $this->conex->prepare("SELECT * FROM asesinos");
        $consulta->execute();   
        $asesinos = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $asesinos;
    }
    
    function Obtenervictimas(){
        $consulta = $this->conex->prepare("SELECT * FROM victimas");
        $consulta->execute();
        $victimas = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $victimas;
    }
    
    function ObtenerVictimaPorId($id) {
        $consulta = $this->conex->prepare("SELECT * FROM victimas WHERE id = $id");
        $consulta->execute();
        $victima = $consulta->fetch(PDO::FETCH_OBJ);
        return $victima;
    }

    function obtenerAsesinoPorId($id_asesino) {
        $consulta2 = $this->conex->prepare("SELECT * FROM asesinos WHERE id=$id_asesino");
        $consulta2->execute();
        $asesino = $consulta2->fetch(PDO::FETCH_OBJ);
        return $asesino;
    }

    function obtenerVictimaporAsesino($id){
        $consulta = $this->conex->prepare("SELECT * FROM victimas WHERE id_asesino=$id");
        $consulta->execute();
        $victimas = $consulta->fetchAll(PDO::FETCH_OBJ);
        return $victimas;
    }

    function obtenerUsuario($username) {
        $consulta = $this->conex->prepare("SELECT * FROM usuarios WHERE email = ?");
        $consulta->execute([$username]);
        $user = $consulta->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function agregarAdmin(){
        $password = password_hash('admin', PASSWORD_BCRYPT);
        $consulta = $this->conex->prepare("INSERT INTO usuarios(email, password) VALUES ('Alfredo', '$password')");
        $consulta->execute();
    }
    

    function agregarVictima($nombre,$apellido,$edad,$genero,$id_asesino){
        $consulta = $this->conex->prepare("INSERT INTO victimas(Nombre, Apellido, Edad, Genero, id_asesino) 
        VALUES (?,?,?,?,?)");
        $consulta->execute([$nombre, $apellido, $edad, $genero, $id_asesino]);
    }


    function eliminarPorId($tabla, $id) {
        $consulta = $this->conex->prepare("DELETE FROM $tabla WHERE id = ?");
        $consulta->execute([$id]);
    }

    function actualizarVictima($nombre, $apellido, $edad, $genero, $asesino, $id) {
        $consulta = $this->conex->prepare("UPDATE victimas SET Nombre='$nombre',Apellido='$apellido',Edad
        ='$edad',Genero='$genero',id_asesino='$asesino' WHERE id=$id");
        $consulta->execute();
    }

    function actualizarAsesino($nombre,$apellido,$edad,$genero,$peso,$altura, $id) {
        $consulta = $this->conex->prepare("UPDATE asesinos SET Nombre='$nombre',Apellido='$apellido',Edad
        ='$edad',Genero='$genero',Peso='$peso',Altura='$altura' WHERE id=$id");
        $consulta->execute();
    }

    function agregarAsesino($nombre,$apellido,$edad,$genero,$peso,$altura) {
        $consulta = $this->conex->prepare("INSERT INTO asesinos(Nombre, Apellido, Edad, Genero, Peso, Altura) 
        VALUES (?,?,?,?,?,?)");
        $consulta->execute([$nombre, $apellido, $edad, $genero, $peso, $altura]);
    }
}


?>