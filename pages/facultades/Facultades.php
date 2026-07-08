<?php
include 'incluir/header.php';

$select_facultades = "SELECT * FROM facultades left JOIN ubicaciones ON facultades.id_fac_ubi = ubicaciones.id_ubi";
$mostrar_facultades = mysqli_query($conexion, $select_facultades);
?>
<body>
    <div class="container d-flex align-items-end gap-3 mt-4">
        <h1>Facultades</h1>
        <p class="text-muted">Listado</p>
        <div class="ms-auto">
            <a href="index.php?p=facultades/FacultadesAgregar" class="btn btn-primary">Agregar</a>
        </div>
    </div>

    <div class="container">
        <hr>
        <table class="table table-striped table-hover align-middle">
            <thead>
                <tr>
                    <th scope="col">Numeración</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col" class="text-center">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila_facultades = mysqli_fetch_array($mostrar_facultades)) : ?>
                    <tr> <td><?= $fila_facultades['id_fac'] ?></td>
                        <td><?= $fila_facultades['nombre_fac'] ?></td>
                        <td><?= $fila_facultades['nombre_ubi'] ?></td>
                        <td class="text-center">
                            <a href="index.php?p=facultades/acciones/delete&id=<?= $fila_facultades['id_fac'] ?>" 
                               onclick="return confirmarEliminacion('esta facultad');" 
                               class="btn btn-danger btn-sm">
                               x
                            </a>
                            <a href="index.php?p=facultades/FacultadesEdit&id=<?= $fila_facultades['id_fac'] ?>" 
                               class="btn btn-warning btn-sm">
                               Actualizar
                            </a>
                        </td>
                    </tr> <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>