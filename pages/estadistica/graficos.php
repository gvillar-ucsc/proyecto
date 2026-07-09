<?php
$id_ubi = intval($_GET["id_ubi"]);

$consulta_ingr_sal_id = "SELECT COUNT(CASE WHEN tipo_reg = 'Ingreso' THEN 1 END) as total_ingresos, COUNT(CASE WHEN tipo_reg = 'Salida' THEN 1 END) as total_salidas FROM registro WHERE id_reg_ubi=".$id_ubi ;
$resultado_ingr_sal_id = mysqli_query($conexion, $consulta_ingr_sal_id);

$fila_estadistica = mysqli_fetch_assoc($resultado_ingr_sal_id);
?>
<div class="container">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    // type indica el tipo de gráfico. Opciones disponibles:
    // 'bar', 'line', 'doughnut', 'pie', 'radar', 'polarArea'
    type: 'bar', 
    data: {
      labels: ['Ingresos', 'Salidas'],
      datasets: [{
        label: 'Flujo de Accesos',
        data: [
          // Inyectamos directamente los dos valores numéricos separados por una coma
          <?php echo intval($fila_estadistica['total_ingresos']); ?>, 
          <?php echo intval($fila_estadistica['total_salidas']); ?>
        ],
        backgroundColor: [
          'rgba(54, 162, 235, 0.5)', // Color para ingresos
          'rgba(255, 99, 132, 0.5)'  // Color para salidas
        ],
        borderWidth: 1
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
