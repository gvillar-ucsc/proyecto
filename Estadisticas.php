<?php

include 'incluir/header.php';
include 'incluir/navbar_accesos.php';

/* para hacer el mapa de calor hay que agrupar el total de usuarios dentro de una ubicacion con la ubicacion
es decir hay que hacer un select con 2 tablas
*/
$query_1 = "SELECT ubic.nombre_ubi, COUNT(reg.tipo_reg) as total_usuarios FROM ubicaciones ubic JOIN registro reg ON ubic.id_ubi = reg.id_reg_ubi WHERE reg.tipo_reg = 'ingreso' GROUP BY ubic.nombre_ubi";
$result =  mysqli_query($conexion, $query_1);

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
                <?php while ($fila = mysqli_fetch_array($result)) : ?>

                    <tr>
                        <td><?= $fila['nombre_ubi'] ?></td>

                        /*no remplazes total_usuarios porque es el nombre del campo del resultado del select*/
                        <td><?= $fila['total_usuarios'] ?></td>

                        <td><a href="se supone que hay un apartado de estadistica, lo dice en el mockap"></a></td>
                    </tr>
                <?php endwhile; ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>