<?php

include 'incluir/header.php';


$query_1 = "SELECT id_ubi, ubic.nombre_ubi, sum(case when tipo_reg='ingreso' then 1 else 0 end) AS ingreso, sum(case when tipo_reg='salida' then 1 else 0 end) AS salida  FROM ubicaciones ubic JOIN registro reg ON ubic.id_ubi = reg.id_reg_ubi  GROUP BY ubic.nombre_ubi";
$result1 =  mysqli_query($conexion, $query_1);


?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Estadisticas</h1>
        <p>Listado</p>
    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Ubicaciones</th>
                <th scope="col">Nivel de calor</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila1 = mysqli_fetch_array($result1)) : ?>
                    <?php $gente_dentro = ($fila1['ingreso'] - $fila1['salida']); ?>
                    <tr>
                        <td><?= $fila1['nombre_ubi'] ?></td>

                        <td><?= $gente_dentro ?> usuarios</td>

                        <td>
                            <a href="index.php?p=estadistica/graficos&id_ubi=<?= $fila1['id_ubi']; ?>">ver graficos</a>
                        </td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>