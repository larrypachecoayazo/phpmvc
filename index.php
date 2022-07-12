<?php

// front Controller


set_include_path('c:/xampp/htdocs/dw/php/proyecto/');


require 'dao/Conexion.php';
$conexion = new Conexion();



if (isset($_POST['controlador'])) {

}


if (isset($_GET['controlador'])) {
    $controller    = $_GET['controlador'];
    $accion        = $_GET['accion'];


    require 'controladores/'.$controller.'Controller.php';
    

    $clase = $controller.'Controller';
    

    $controlador = new $clase($conexion);
    $controlador->$accion();

}


// 


?>