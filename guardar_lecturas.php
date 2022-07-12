<?php


var_dump($_POST);

$conexion = new mysqli('localhost', 'root', '', 'lecturas');

if (!$conexion) {
    echo "Error ala realizar la conexión";
}

$titulo    = $_POST['titulo'];
$contenido = $_POST['contenido'];



$consulta = "INSERT INTO lectura(titulo, contenido) VALUES ('$titulo', '$contenido' )";


$res = $conexion->query($consulta);

if (!$res) {
    echo "Error al guardar datos";
}else{
    echo "<div class='alert alert-primary' role='alert'>Datos guardados!</div>";
}

?>