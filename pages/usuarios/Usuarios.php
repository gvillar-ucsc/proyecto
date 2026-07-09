<?php

include 'incluir/header.php';
// contula sql
$query_usuarios = "SELECT * FROM usuarios ";
$result_usuarios =  mysqli_query($conexion, $query_usuarios);
?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Usuarios</h1>
        <p>Listado</p>
        <div class="ms-auto">

        <a href="index.php?p=usuarios/CrearUsuario" class="btn btn-primary">Agregar</a>
    </div>
    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Numeración</th>
                <th scope="col">Nombre</th>
                <th scope="col">Tipo de Usuario</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
             <?php while ($fila_usuarios = mysqli_fetch_array($result_usuarios)) : ?>
                  <tr>
                        <td><?= $fila_usuarios['id'] ?></td>
                        <td><?= $fila_usuarios['nombre_usu'] ?></td>
                        <td><?= $fila_usuarios['tipo_usu'] ?></td>
                        <td>
                            <a href="index.php?p=usuarios/acciones/delete&id=<?= $fila_usuarios['id']?>" onclick="return confirmarEliminacion('este Usuario');" class="btn btn-danger btn-sm">x</a>
                            
                            <a href="index.php?p=usuarios/UsuarioEdit&id=<?= $fila_usuarios['id'] ?>" class="btn btn-warning btn-sm">actualizar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script src="script/notificacion_eliminar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>