<?php
session_start();
require("../../BDD/conexion.php");

if (isset($_POST['Guardar'])) {

    $usuario_u = $_POST['nombre_u'];
    $categoria_u = $_POST['categoria_u'];

    $consulta = "INSERT into usuarios (nombre_u, categoria_u) VALUES ('$usuario_u', '$categoria_u')";
    mysqli_query($conexion, $consulta);

    header("Location: ../User/Usuarios.php");
    exit();
}
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
          <a class="nav-link active" aria-current="page" href="../Ubication/Ubicacion.php">Ubicaciones</a>
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
        <h1>Usuarios</h1>
        <p>Agregar</p>
        <div class="ms-auto">
        </div>
    </div>
    <div class="container">
        <hr>
    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nombre_u">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Categoría</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="categoria_u">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" name="Guardar" class="btn btn-primary">Guardar Usuario</button>
                <a href="../User/Usuarios.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>