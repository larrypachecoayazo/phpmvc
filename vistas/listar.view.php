<h1>Listado General de usuarios</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">IDENTIFICACIÓN</th>
      <th scope="col">NOMBRES</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($datos as $fila) {
            echo "<tr>";
            echo "<th scope='row'>".$fila['id']."</th>";
            echo "<td>".$fila['identificacion']."</td>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['email']."</td>";
            // echo '<td><a class="btn btn-success btn-sm" href="visualizar_lectura.php?id='.$fila['id'].'" role="button">Seleccionar</a></td>';
            echo "</tr>";
        }
    ?>       
  </tbody>
</table>