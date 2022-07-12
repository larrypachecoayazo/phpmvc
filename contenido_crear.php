<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.js"></script>

<title>Crear Lecturas</title>
</head>

<html>
<body>
  
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Administración de Lecturas</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Crear <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="listar_lecturas.php">Listado</a>
      </li>
    </ul>
  </div>
</nav>

<h1 class="display-3">Crear Lecturas</h1>

<form action="contenido_crear.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input type="text" class="form-control" id="titulo" name="titulo" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Titulo de la lectura</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contenido</label>
    <textarea class="form-control" id="contenido" name="contenido" rows="3"></textarea>
  </div>


  <?php
    if (isset($_POST['titulo'])) {
      // var_dump($_POST);
      
      //     

      // $titulo    = $_POST['titulo'];
      // $contenido = $_POST['contenido'];

      // $res = $conexion->ejecutar("INSERT INTO lectura(titulo, contenido) VALUES ('$titulo', '$contenido' )");

      // if (!$res) {
      //     echo "Error al guardar datos";
      // }else{
      //     echo "<div class='alert alert-primary' role='alert'>Datos guardados!</div>";
      // }

        require 'dao/Conexion.php';
        $conexion = new Conexion();

        $titulo    = $_POST['titulo'];
        $contenido = $_POST['contenido'];

        $consulta = "INSERT INTO lectura(titulo, contenido) VALUES ('$titulo', '$contenido' )";
        $res = $conexion->ejecutar($consulta);

        if (!$res) {
            echo "Error al guardar datos";
        }else{
            echo "<div class='alert alert-primary' role='alert'>Datos guardados!</div>";
        }
        
    }
  ?>

  
  <button type="submit" class="btn btn-primary">Enviar Lectura</button>
</form>

</div>


</body>

</html