<?php
require_once 'smarty/libs/smarty/Smarty.class.php';

class RegistroView {
    
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    function showHome() {
        $this->smarty->display('templates/home.tpl');
    }

    function showVictimas($victimas, $sesion){
        $this->smarty->assign('victimas', $victimas);
        $this->smarty->assign('sesion', $sesion);
        $this->smarty->display('templates/listarVictimas.tpl');
    }

    function showDetalles($victima, $asesino) {
        $this->smarty->assign('victima', $victima);
        $this->smarty->assign('asesino', $asesino);
        $this->smarty->display('templates/showDetalles.tpl');
    }

    function mostrarVictimaPorAsesino($victimas){
        $this->smarty->assign('victimas', $victimas);
        $this->smarty->display('templates/victimaPorAsesino.tpl');
    }


    function showHomeAdmin($asesinos){
        $this->smarty->assign('asesinos', $asesinos);
        $this->smarty->display('templates/homeAdmin.tpl');
    }

    function formEditar($tabla, $asesinos, $id) {
        $this->smarty->assign('tabla', $tabla);
        $this->smarty->assign('asesinos', $asesinos);
        $this->smarty->assign('id', $id);
        $this->smarty->display('formEditar.tpl');
    }

    function showAsesinos($asesinos, $sesion){
        $this->smarty->assign('asesinos', $asesinos);
        $this->smarty->assign('sesion', $sesion);
        $this->smarty->display('templates/listarAsesinos.tpl');
    }
}


?>