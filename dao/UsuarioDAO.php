<?php

class UsuarioDAO {

    // CRUD de Lecturas


    private $conexion;



    public function __construct( $conexion ) 
    {
		$this->conexion = $conexion;
    }


    public function listar() {
        return $resultado = $this->conexion->ejecutar("SELECT * FROM usuarios");
	}

    
    public function insertar($datos) {
        
	}
    

	public function actualizar($datos) {
		
	}

    public function eliminar($id) {
		
	}

	public function buscar($parametros) {
		
	}
       
}

?>