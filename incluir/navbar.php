<?php
// BORRAMOS la línea $_SESSION['usu_ingreso'] = ""; para que no destruya los datos

// Cambiamos la condición para revisar lo que devolvió la base de datos en el index.php
if (isset($fila3['tipo_usu']) && $fila3['tipo_usu'] == "administrador") {
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./Img/LOGO.png">
            <img src="./Img/LOGO.png" alt="Bootstrap" width="200" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="index.php?p=usuarios/Usuarios">Usuarios</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Accesos</a></li>
                <li class="nav-item"><a class="nav-link active" href="./Estadisticas.html">Estadísticas</a></li>
                <li class="nav-item"><a class="nav-link active" href="./Facultades.html">Facultades</a></li>
            </ul>
            <span class="navbar-text">
                Usuario: <?php echo $_SESSION['usuario_ingreso']; ?>
            </span>
        </div>
    </div>
</nav>
<hr>

<?php 
} else { 
?>
    
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="./Img/LOGO.png">
            <img src="./Img/LOGO.png" alt="Bootstrap" width="200" height="50">
        </a>
    </div>
</nav>
<hr>

<?php
}
?>