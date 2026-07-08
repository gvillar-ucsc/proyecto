<?php

include 'incluir/header.php';
include 'pages/ubicacion/acciones/select.php';
?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Ubicaciones</h1>
        <p>Listado</p>
        <div class="ms-auto">

            <a href="index.php?p=ubicacion/Crear_Ubicacion" class="btn btn-primary">Agregar</a>
        </div>

    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th class="text-center" scope="col">id</th>

                <th class="text-center" scope="col">Ubicacion</th>
                <th class="text-center" scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php while ($fila_ubicaciones = mysqli_fetch_array($mostrar_ubicaciones)) : ?>
                        <tr>
                            <td class="text-center"><?= $fila_ubicaciones['id_ubi'] ?></td>

                            <td class="text-center"><?= $fila_ubicaciones['nombre_ubi'] ?></td>

                            <td class="text-center">
                                <a href="index.php?p=Ubicacion/acciones/delete&id_ubi=<?= $fila_ubicaciones['id_ubi'] ?>" 
                                onclick="return confirmarEliminacion('esta Ubicación');" 
                                class="btn btn-danger btn-sm">
                                x
                                </a>
                                
                                <a href="index.php?p=Ubicacion/Ubiccion_Edit&id_ubi=<?= $fila_ubicaciones['id_ubi'] ?>" 
                                class="btn btn-warning btn-sm">
                                actualizar
                                </a> 
                            </td>
                        </tr>
                    <?php endwhile; ?>

                </tr>
            </tbody>
        </table>
    </div>    
    <script src="script/notificacion_eliminar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>