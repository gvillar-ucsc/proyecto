<?php

include 'incluir/header.php';
include 'incluir/navbar_accesos.php';

$query = "SELECT * FROM facultades ";
$result =  mysqli_query($conexion, $query);
?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Facultades</h1>
        <p>Listado</p>
        <div class="ms-auto">
            <a href="FacultadesAgregaar.php"><button class="btn btn-primary">Agregar</button></a>
        </div>
    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Numeración</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>                    
                    <?php while ($fila = mysqli_fetch_array($result)) : ?>

                        <td><?= $fila['id_fac'] ?></td>
                        <td><?= $fila['nombre_fac'] ?></td>
                        <td><a href="eliminar_php">x</a><a href="FacultadesAgregaar.php">actualizar</a></td>
                    <?php endwhile; ?>

                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>