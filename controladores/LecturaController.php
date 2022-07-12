<?php

class LecturaController {

    // CRUD de Lecturas


    public function __construct( $conexion ) 
    {
		$this->conexion = $conexion;
    }


    public function listar() {
        
        require 'dao/LecturasDAO.php';


        $lectura = new LecturasDAO($this->conexion);


        // Modelo
        $resultado = $lectura->listar_todo();


        // Vista
        include 'vistas/listar.php';

    }

    public function vista_crear() {

    }
    
    public function insertar() {

    }
    


}

?>