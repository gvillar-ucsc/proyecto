<?php
$id_ubi = $_GET["id_ubi"];

$consulta_ingr_sal_id = "SELECT COUNT(CASE WHEN tipo_reg = 'Ingreso' THEN 1 END) as total_ingresos, COUNT(CASE WHEN tipo_reg = 'Salida' THEN 1 END) as total_salidas FROM registro WHERE id_reg_ubi=".$id_ubi ;
$resultado_ingr_sal_id = mysqli_query($conexion, $consulta_ingr_sal_id);


?>
<div class="container">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['ingreso', 'salida'],
      datasets: [{
        label: '',
        data: [
            <?php while ($fila_estadistica = mysqli_fetch_array($resultado_ingr_sal_id)) : ?>
                <?= $fila_estadistica['total_ingresos']?>, 
                <?= $fila_estadistica['total_salidas']?>
            <?php endwhile; ?>

        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
