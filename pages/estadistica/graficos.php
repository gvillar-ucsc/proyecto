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
  //esto esta copiado y pegado de chart ignoren todo a no ser que les escriba un comentario en una parte
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
// type indica el tipo de gráfico. Opciones disponibles:
    // 'bar'       -> Gráfico de barras (vertical u horizontal)
    // 'line'      -> Gráfico de líneas (ideal para tendencias temporales)
    // 'doughnut'  -> Gráfico de dona (el que querías para los roles)
    // 'pie'       -> Gráfico de pastel / tarta tradicional
    // 'radar'     -> Gráfico de radar / araña (para comparar múltiples variables)
    // 'polarArea' -> Gráfico de área polar (similar al de pastel, pero con radios diferentes)
    // 'bubble'    -> Gráfico de burbujas (3 dimensiones de datos)
    // 'scatter'   -> Gráfico de dispersión (puntos basados en coordenadas X e Y)
    type: 'bar',    type: 'bar',
    data: {
      labels: ['ingreso', 'salida'],
      datasets: [{
        label: '',
        data: [
            <?php// en esta parte van los valores
             while ($fila_estadistica = mysqli_fetch_array($resultado_ingr_sal_id)) : ?>
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
