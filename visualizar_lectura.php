<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>

<title>Crear Contenido</title>
</head>

<html>

<div class="container">


    <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <a class="navbar-brand" href="#">Comprensión de Lectura</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link" href="contenido_crear.php">Crear Lectura <span class="sr-only">(current)</span></a>      
    </li>
      <li class="nav-item">
      <a class="nav-link" href="listar_lecturas.php">Listado <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<h1 class="display-4">Lectura Seleccionada</h1>
<hr>

<?php

        require 'Conexion.php';
        $conexion = new Conexion();

        $id = $_GET['id'];

        $resultado = $conexion->ejecutar("SELECT * FROM lectura WHERE id = '$id'");

        $fila = mysqli_fetch_assoc($resultado);

        
?>



<h3>Titulo</h3>
<p><?=$fila['titulo']?></p>

<h3>Contenido</h3>
<p><?=$fila['contenido']?></p>

        
</div>
       
    </body>
</html>
