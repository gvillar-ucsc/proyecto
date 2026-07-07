<?php

$query = "SELECT * FROM ubicaciones ";
$result =  mysqli_query($conexion, $query);


$query1 = "SELECT * FROM usuarios where id='{$_SESSION['encargado']} ' ";
$result1 =  mysqli_query($conexion, $query1);
$fila1 = mysqli_fetch_assoc($result1);


?>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center g-5">
            <?php while ($fila = mysqli_fetch_array($result)) :
                if(1== $fila['id_ubi'] ) :?>

                <div class="col-md-4 text-center">
                    <a href="index.php" class="btn btn-outline-dark btn-menu">
                        <?php echo $fila['nombre_ubi']; ?>
                    </a>
                </div>
                <?php else :?>
                <div class="col-md-4 text-center">
                    <a href="#" class="btn btn-outline-dark btn-menu">
                        <?php echo $fila['nombre_ubi']; ?>
                    </a>
                </div>
            <?php endif; ?>
       <?php endwhile; ?>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>