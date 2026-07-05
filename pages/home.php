<body>
  <form class="w-50 mx-auto"  action="crear_registro.php" method="POST">

      <div class="container">
          <h1>Ingresar</h1>
          <hr>
          <form>
    <div class="container-fluid">
      <div class="row d-flex justify-content-around">
        <label class="col-2" for="inputID" class="form-label">ID</label>
        <input name="id_usuario"  class="col-8" type="text" class="form-control" id="inputID">
        <button class="col-2" type="submit" class="btn btn-primary">Acceder</button>
      </div>
      <div name="ubicacion" class="text-muted fw-bold mb-2"><?php echo $ubi ?? 'sin ubicacion' ?></div>
      <div name="fecha" id="fecha" class="text-muted fw-bold mb-2">Cargando fecha</div>
      <div name="hora" id="reloj" class="badge bg-dark fs-5">00:00:00</div>
    </div>
  </form>
    </div>
    <script src="script/reloj.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>