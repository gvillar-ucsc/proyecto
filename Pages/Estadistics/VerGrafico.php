<?php
session_start();
require("../../BDD/conexion.php");

if (!isset($_SESSION['id_u'])) {
    exit();
}

$id_ubi = isset($_GET["ubicacion"]) ? intval($_GET["ubicacion"]) : 0;

$consulta_ingr_sal_id = "SELECT 
    COUNT(CASE WHEN tipo_reg = 'Entrada' THEN 1 END) as total_ingresos, 
    COUNT(CASE WHEN tipo_reg = 'Salida' THEN 1 END) as total_salidas 
    FROM registros 
    WHERE id_u_reg = $id_ubi";

$resultado_ingr_sal_id = mysqli_query($conexion, $consulta_ingr_sal_id);
$fila_estadistica = mysqli_fetch_assoc($resultado_ingr_sal_id);

$consulta_nombre = "SELECT nombre_ubi FROM ubicacion WHERE num_u = $id_ubi";
$res_nombre = mysqli_query($conexion, $consulta_nombre);
$reg_nombre = mysqli_fetch_assoc($res_nombre);
$nombre_grafico = $reg_nombre ? $reg_nombre['nombre_ubi'] : "Desconocida";
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
          <a class="nav-link active" aria-current="page" href="../User/Usuario.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Ubication/Ubicacion.php">Ubicaciones</a>
        </li>

      </ul>
      <span><?= $_SESSION['id_u']; ?></span>
      <span>ㅤ<?= $_SESSION['nombre_u']; ?></span>
      <a class="p-2" href="../../Registers/Salida.php">Logout</a>
    </div>
  </div>
</nav>
<hr>
<div class="container my-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Detalle de Accesos: <span class="text-primary"><?= htmlspecialchars($nombre_grafico); ?></span></h2>
        <a href="./Estadisticas.php" class="btn btn-outline-secondary">Volver</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8" style="position: relative; height:45vh; width:100%">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'bar', 
    data: {
      labels: ['Ingresos (Entradas)', 'Salidas'],
      datasets: [{
        label: 'Cantidad de Movimientos',
        data: [
          <?= intval($fila_estadistica['total_ingresos']); ?>, 
          <?= intval($fila_estadistica['total_salidas']); ?>
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.6)',  
          'rgba(255, 99, 132, 0.6)'   
        ],
        borderColor: [
          'rgba(54, 162, 235, 1)',
          'rgba(255, 99, 132, 1)'
        ],
        borderWidth: 1.5
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        y: {
          beginAtZero: true,
          ticks: {
             stepSize: 1 
          }
        }
      }
    }
});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>