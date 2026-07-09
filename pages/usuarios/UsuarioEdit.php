<?php

include 'incluir/header.php';

$id = $_GET["id"];

$query = "SELECT * FROM usuarios WHERE id = " . $id . ";";
$result = mysqli_query($conexion, $query);


if ($user = mysqli_fetch_assoc($result)) {
    $nombre_usu = $user["nombre_usu"];
    $tipo_usu = $user["tipo_usu"];
    $id = $user["id"];
} else {
    
    header("Location: ../../../index.php?p=usuarios/Usuarios");
}?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Usuarios</h1>
        <p>Editar</p>
        <div class="ms-auto">
        </div>
    </div>
    <div class="container">
        <hr>
    <div class="container mt-5">
        <form class="w-50 mx-auto" action="pages/usuarios/acciones/update.php" method="POST">
            <div class="row mb-3 align-items-center">
                <label for="nombre" class="col-sm-4 col-form-label">
                Nombre
                </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nombre_usu" value="<?= $nombre_usu ?>">
            </div>
            </div>
            <div class="row mb-4 align-items-center">
            <label for="numeracion" class="col-sm-4 col-form-label">
                tipo de usuario
            </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="tipo_usu" value="<?= $tipo_usu ?>">
            </div>
            </div>
            <input type="hidden" name="id" value="<?php echo $id?>">

            <div class="text-center">
            <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>