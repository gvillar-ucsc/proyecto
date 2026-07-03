<?php

include 'incluir/header.php';
include 'incluir/navbar_accesos.php';
$query = "SELECT * FROM remaplzar_tabla_ubicacion ";
$result =  mysqli_query($conexion, $query);



?>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center g-5">
            <?php while ($fila = mysqli_fetch_array($result)) : ?>

                <div class="col-md-4 text-center">
                    <a href="#" class="btn btn-outline-dark btn-menu">
                        <?= $fila['remplazar_nombre_ubicacion'] ?>
                    </a>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>