<?php

// Conexión a la base de datos
require 'dao/Conexion.php';
require 'dao/LecturasDAO.php';

$conexion = new Conexion();
$lecturas = new LecturasDAO($conexion);

//
// Logica de la aplicación
// 
$resultado = $lecturas->listar_todo();


// 
// Generación de la vista
// 
include 'vistas/listar.view.php';


?>