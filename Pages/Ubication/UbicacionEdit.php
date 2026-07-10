<?php
session_start();
require("../../BDD/conexion.php");

if (!isset($_SESSION['id_u'])) {
    header("Location: ../../index.php");
    exit();
}

if (isset($_GET['id_u'])) {
    $num_u = intval($_GET['id_u']);
} else {
    echo "<div class='alert alert-danger'>Error: No se proporcionó un ID de ubicación válido.</div>";
    exit();
}

$query = "SELECT * FROM ubicacion WHERE num_u = $num_u";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
    $row = mysqli_fetch_assoc($resultado);
    $nombre_ubi = $row['nombre_ubi'];
    $calle_ubi = $row['calle_ubi'];
} else {
    echo "<div class='alert alert-warning'>Ubicación no encontrada.</div>";
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
        <h1>Ubicaciones</h1>
        <p>Editar</p>
        <div class="ms-auto">
        </div>
    </div>
    <div class="container">
        <hr>
    <div class="container mt-5">
        <form action="" method="POST" class="w-50 mx-auto">
            <input type="hidden" name="id" value="<?php echo $num_u; ?>">
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nombre_ubi" value="<?php echo $nombre_ubi; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Categoría</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="calle_ubi" value="<?php echo $calle_ubi; ?>">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" name="Editar" class="btn btn-primary">Editar</button>
                <a href="../Ubication/Ubicacion.php" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>        
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>