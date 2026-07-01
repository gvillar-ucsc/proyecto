<?php

include 'incluir/header.php';
include 'incluir/navbar_accesos.php';
?>
<body>
   <div class="container d-flex align-items-end gap-3">
        <h1>Usuarios</h1>
        <p>Listado</p>
        <div class="ms-auto">
            <button class="btn btn-primary">Agregar</button>
        </div>
    </div>
    <div class="container">
        <hr>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Numeración</th>
                <th scope="col">Nombre</th>
                <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ejemplo</td>
                    <td>ejemplo</td>
                    <td>editaryeliminar</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>