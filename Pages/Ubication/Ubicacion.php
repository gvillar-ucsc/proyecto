<?php
session_start();
require("../../BDD/conexion.php");

$query_ubicacion = "SELECT * FROM ubicacion ";
$result_ubicacion =  mysqli_query($conexion, $query_ubicacion);

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="../../index.php">
        <img src="../../Img/LOGO.png" alt="Bootstrap" width="200" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../User/Usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Estadistics/Estadisticas.php">Estadisticas</a>
        </li>
   
      </ul>
      <span><?= $_SESSION['id_u']; ?></span>
      <span>ㅤ<?= $_SESSION['nombre_u']; ?></span>
      <a class="p-2" href="../../Registers/Salida.php">Logout</a>
    </div>
  </div>
</nav>
<hr>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Ubicaciones</h1>
        <p>Listado</p>
        <div class="ms-auto">
            <a href="../Ubication/AgregarUbicacion.php" class="btn btn-primary">Agregar</a>
        </div>
    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th class="text-center" scope="col">ID</th>
                <th class="text-center" scope="col">Ubicacion</th>
                <th class="text-center" scope="col">Calle</th>
                <th class="text-end" scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $consulta = "SELECT * FROM ubicacion";
                        $resultado = mysqli_query($conexion,$consulta);
                
                        while($row=mysqli_fetch_assoc($resultado)){
                            $num_u=$row["num_u"];
                            $nombre_ubi=$row["nombre_ubi"];
                            $calle_ubi=$row["calle_ubi"];
                            echo "<tr>";
                            echo "<td class='text-center'>" .$num_u. "</td>";
                            echo "<td class='text-center'>" .$nombre_ubi. "</td>";
                            echo "<td class='text-center'>" .$calle_ubi. "</td>";
                            echo "<td class='text-center'><a href='../Ubication/EliminarUbicacion.php?id_u=".$num_u."' class='mx-2' onclick='return confirmarEliminacion();'>Eliminar</a></td>";
                            echo "<td><a href='../Ubication/UbicacionEdit.php?id_u=".$num_u."'>Editar</a></td>";
                            echo "</tr>";
                        }
                    ?>
            </tbody>
        </table>
    </div>    
    <script src="../../Scripts/ConfirmDelete.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>