<?php
session_start();
require("BDD/conexion.php");

?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a href="index.php">
      <img src="IMG/LOGO.png" alt="Bootstrap" width="200" height="50">
    </a>
  </div>
</nav>
<hr>
<body>
<div class="container d-flex align-items-center gap-3">
    <h1>Ingresar</h1>
    <p name="mostrar_hora" id="reloj" class="badge bg-dark fs-6">Cargando Hora</p>
    <p name='mostrar_fecha' id="fecha" class="text-muted fw-bold">Cargando Fecha</p>
    <input type="hidden" name="hora" id="input_hora_secreto">
    <input type="hidden" name="fecha" id="input_fecha_secreto">
    <hr>
</div>
<div class="container">
    <div class="row d-flex justify-content-around">
        <form action="index.php" method="POST">
            <label>Ingrese su ID:</label>
            <input class="col-8" type="text" name="id_u">
            <button class="col-2" type="submit">Ingresar</button>
        </form>
    <?php
        if (isset($_POST['id_u'])) {
            $id_u = mysqli_real_escape_string($conexion, $_POST['id_u']);

            $consulta = "SELECT * FROM usuarios WHERE id_u = '$id_u'";
            $resultado = mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($resultado) > 0) {
            $usuario = mysqli_fetch_assoc($resultado);

            $_SESSION['id_u'] = $usuario['id_u'];
            $_SESSION['nombre_u'] = $usuario['nombre_u'];
            $_SESSION['categoria_u'] = $usuario['categoria_u'];
                
            $id_ubicacion_actual = 1; 
            $_SESSION['id_u_reg'] = $id_ubicacion_actual;

            date_default_timezone_set('America/Santiago');
            $fecha = date("Ymd");
            $hora = date("His");
            $tipo_reg = 'Entrada';

            $consulta_registro = "INSERT INTO registros (fecha, hora, tipo_reg, id_registro_usu, id_u_reg) 
            VALUES ('$fecha', '$hora', '$tipo_reg', '{$usuario['id_u']}', '$id_ubicacion_actual')";
            mysqli_query($conexion, $consulta_registro);

            $update_estadistica = "UPDATE estadisticas SET personas = personas + 1 WHERE ubicacion = '$id_ubicacion_actual'";
                mysqli_query($conexion, $update_estadistica);

                if ($usuario['categoria_u'] == "Administrador") {
                    header("Location: Pages/Estadistics/Estadisticas.php");
                    exit();
                } elseif ($usuario['categoria_u'] == "Guardia") {
                    header("Location: Pages/Ubication/Ubicacion.php");
                    exit();
                }
            } else {
            echo "El ID no existe.";
            }
        }
    ?>
    </div>
</div>
    <script src="Scripts/Clock.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>