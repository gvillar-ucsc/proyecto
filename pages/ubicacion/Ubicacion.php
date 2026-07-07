<?php

include 'incluir/header.php';

?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Ubicaciones</h1>
        <p>Listado</p>
    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Ubicacion</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php while ($fila = mysqli_fetch_array($result)) : ?>

                        <td><?= $fila['nombre_ubi'] ?></td>
                        <td><a href="eliminar_php">x</a><a href="actualizar_php">actualizar</a></td>
                    <?php endwhile; ?>

                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>