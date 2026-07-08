<?php
include 'incluir/header.php';

$id_ubi = $_GET["id_ubi"];

$select_ubicaciones = "SELECT * FROM ubicaciones WHERE id_ubi = " . $id_ubi . ";";
$mostrar_ubicaciones = mysqli_query($conexion, $select_ubicaciones);

if ($fila_ubicaciones = mysqli_fetch_assoc($mostrar_ubicaciones)) {
    $nombre_ubi   = $fila_ubicaciones["nombre_ubi"];
    $calle_fac    = $fila_ubicaciones["calle_fac"];
    $calle_numero = $fila_ubicaciones["calle_numero"];
} else {
    header("Location: /xampp/proyecto/index.php?p=ubicacion/Ubicacion");
    exit();
}
?>
<body>
    <div class="container d-flex align-items-end gap-3 mt-4">
        <h1>Ubicaciones</h1>
        <p class="text-muted">Editar</p>
        <div class="ms-auto"></div>
    </div>

    <div class="container">
        <hr>
        
        <form class="w-50 mx-auto mt-5" action="pages/ubicacion/acciones/update.php" method="POST">
            
            <div class="row mb-3 align-items-center">
                <label for="nombre_ubi" class="col-sm-4 col-form-label">Nombre Ubicación</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control"  name="nombre_ubi" value="<?= $nombre_ubi ?>">
                </div>
            </div>

            <div class="row mb-3 align-items-center">
                <label for="calle_fac" class="col-sm-4 col-form-label">nombre de calle</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control"  name="calle_fac" value="<?= $calle_fac ?>">
                </div>
            </div>

            <div class="row mb-4 align-items-center">
                <label for="calle_numero" class="col-sm-4 col-form-label">numero de calle</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control"  name="calle_numero" value="<?= $calle_numero ?>">
                </div>
            </div>

            <input type="hidden" name="id_ubi" value="<?= $id_ubi ?>">

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>