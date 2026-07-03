<?php

include 'incluir/header.php';
include 'incluir/navbar_accesos.php';

/* para hacer el mapa de calor hay que agrupar el total de usuarios dentro de una ubicacion con la ubicacion
es decir hay que hacer un select con 2 tablas
*/
$query_1 = "SELECT ubic.ramplazar_campo, COUNT(usurs.ramplazar_campo) as total_usuarios FROM remaplzar_tabla_ubicacion ubic join remaplzar_tabla_usuarios usurs on ubic.ramplazar_clave_primaria = usurs.ramplazar_clave_foranea GROUP BY ubic.remaplzar_id_ubicacion ";
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
                        <td><?= $fila['remplazar_nombre_ubicacion'] ?></td>

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