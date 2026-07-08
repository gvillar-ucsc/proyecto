
<body>
    <div class="container d-flex align-items-end gap-3 mt-4">
        <h1>Facultades</h1>
        <p class="text-muted">Agregar</p>
        <div class="ms-auto"></div>
    </div>

    <div class="container">
        <hr>
        
        <form class="w-50 mx-auto mt-5" action="pages/facultades/acciones/crear.php" method="POST">
            
            <div class="row mb-3 align-items-center">
                <label for="nombre" class="col-sm-4 col-form-label">Nombre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nombre" name="nombre_fac" required>
                </div>
            </div>
            
            <div class="row mb-3 align-items-center">
                <label for="calle" class="col-sm-4 col-form-label">Calle</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="calle" name="calle_fac" required>
                </div>
            </div>
            
            <div class="row mb-3 align-items-center">
                <label for="numeracion" class="col-sm-4 col-form-label">Numeración</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="numeracion" name="calle_numero" required>
                </div>
            </div>
          
            <div class="row mb-4 align-items-center">
                <label for="id_fac_ubi" class="col-sm-4 col-form-label">Ubicación</label>
                <div class="col-sm-8">
                    <select class="form-select" name="id_fac_ubi" id="id_fac_ubi" required>
                        <?php include 'pages/ubicacion/acciones/select.php'; ?>
                        <?php while ($ubi = mysqli_fetch_array($mostrar_ubicaciones)) :?>

                            <option value="<?= $ubi['id_ubi'] ?>">

                                <?= $ubi['nombre_ubi'] ?>

                            </option>

                        <?php endwhile;?>

                   
                    </select>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" name="enviar" class="btn btn-primary">Agregar</button>
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>