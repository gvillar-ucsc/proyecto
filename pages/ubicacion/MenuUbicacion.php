<?php

$query_ubicacion = "SELECT * FROM ubicaciones ";
$result_ubicacion =  mysqli_query($conexion, $query_ubicacion);



?>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center g-5">
            <?php while ($fila_result_ubicacion = mysqli_fetch_array($result_ubicacion)) :
                if(1== $fila_result_ubicacion['id_ubi'] ) :?>

                <div class="col-md-4 text-center">
                    <a href="#" class="btn btn-outline-dark btn-menu">
                        <?php echo $fila_result_ubicacion['nombre_ubi']; ?>
                    </a>
                </div>
                <?php else :?>
                <div class="col-md-4 text-center">
                    <a href="index.php" class="btn btn-outline-dark btn-menu">
                        <?php echo $fila_result_ubicacion['nombre_ubi']; ?>
                    </a>
                </div>
            <?php endif; ?>
       <?php endwhile; ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>