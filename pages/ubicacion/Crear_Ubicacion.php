<?php
include 'incluir/header.php';
?>
<body>
    <div class="container d-flex align-items-end gap-3 mt-4">
        <h1>Ubicación</h1>
        <p class="text-muted">Agregar</p>
        <div class="ms-auto">
            </div>
    </div>

    <div class="container">
        <hr>
        
        <form class="w-50 mx-auto mt-5" action="pages/ubicacion/acciones/crear.php" method="POST"> 
            
            <div class="row mb-3 align-items-center">
                <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nombre_ubi"  >
                </div>
            </div> 

            <div class="row mb-4 align-items-center">
                <label for="tipo_usu" class="col-sm-4 col-form-label">nombre de calle</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="calle_fac"  >
                </div>
            </div> 
            <div class="row mb-4 align-items-center">
                <label for="tipo_usu" class="col-sm-4 col-form-label">numero de calle</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="calle_numeracion"  >
                </div>
            </div> 

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Agregar</button>
            </div> 

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>