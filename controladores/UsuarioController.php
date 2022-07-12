<?php

require 'dao/UsuarioDAO.php';

class UsuarioController {


    private $usuarioDAO;


    public function __construct( $conexion ) 
    {
        $this->usuarioDAO = new UsuarioDAO($conexion);
    }


    public function listar() {

        $datos = $this->usuarioDAO->listar();

        include 'vistas/listar.view.php';
        
    }

    public function vista_crear() {

    }
    
    public function insertar() {

        // Validación

    }
    


}

?>