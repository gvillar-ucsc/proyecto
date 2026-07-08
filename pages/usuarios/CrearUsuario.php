<?php
include 'incluir/header.php';
?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Usuarios</h1>
        <p>Agregar</p>
        <div class="ms-auto">
        </div>
    </div>
    <div class="container">
        <hr>
    <div class="container mt-5">
        <form class="w-50 mx-auto" action="pages/usuarios/acciones/crear_usuario.php" method="POST"> 
            <div class="row mb-3 align-items-center">
                <label for="nombre" class="col-sm-4 col-form-label">
                Nombre
                </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="nombre_usu">
            </div>
            </div>
            <div class="row mb-4 align-items-center">
            <label for="numeracion" class="col-sm-4 col-form-label">
                Tipo de Usuario
            </label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="tipo_usu">
            </div>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>