<?php
include 'incluir/header.php';

$fila = null;

if (isset($_SESSION['id_ubi'])) {

    $id_ubi = $_SESSION['id_ubi'];

    $consulta = "SELECT * FROM ubicaciones WHERE id_ubi = '$id_ubi'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado && mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
    }
}
?>
<body>
  <form class="w-50 mx-auto"  action="pages/registro/acciones/crear_registro.php" method="POST">

      <div class="container">
          <h1>Ingresar</h1>
          <hr>
          <?php // este es un formulario que usa js para obtener la hora y variables del index con input ocultos para funcionar?>
    <div class="container-fluid">
      <div class="row d-flex justify-content-around">
        <label class="col-2" for="inputID" class="form-label">ID</label>
        <input name="id_usuario"  class="col-8" type="text" class="form-control" id="inputID">
        <button class="col-2" type="submit" class="btn btn-primary">Acceder</button>
      </div>
      <div  class="text-muted fw-bold mb-2"><?php echo $fila['nombre_ubi'] ?? 'sin ubicacion' ?></div>
      <div name=""mostrar_fecha id="fecha" class="text-muted fw-bold mb-2">Cargando fecha</div>
      <div name="mostrar_hora" id="reloj" class="badge bg-dark fs-5">00:00:00</div>    
      <div name="nombre_usu" id="nombre_usu" class="text-muted fw-bold mb-2"><?php echo $fila_result_select_usuarios_id['nombre_usu'] ?? 'sin encargado'; ?></div>    

      <input type="hidden" name="id_ubi" value="<?php echo $_SESSION["id_ubi"]; ?>">
      <input type="hidden" name="id" value="<?php echo $fila_result_select_usuarios_id['id'] ?? ''; ?>">
      <input type="hidden" name="hora" id="input_hora_secreto" value="">
      <input type="hidden" name="fecha" id="input_fecha_secreto">
    </div>
  </form>
    </div>
    <script src="script/reloj.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>