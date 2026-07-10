<?php
// solo si el tipo de usuario existe y es == administrador se muestra el nav completo y de otra forma solo se muestra el logo
if (isset($fila_result_select_usuarios_id['tipo_usu']) && $fila_result_select_usuarios_id['tipo_usu'] == "administrador") {
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
                <li class="nav-item"><a class="nav-link active" href="index.php">Accesos</a></li>
                <li class="nav-item"><a class="nav-link active" href="index.php?p=estadistica/Estadisticas">Estadísticas</a></li>
                <li class="nav-item"><a class="nav-link active" href="index.php?p=facultades/Facultades">Facultades</a></li>
                <li class="nav-item"><a class="nav-link active" href="index.php?p=ubicacion/Ubicacion">Ubicacion</a></li>
            </ul>
            <span class="navbar-text">
                Usuario: <?php echo $_SESSION['usu_ingreso']; ?>
            </span>
        </div>
    </div>
</nav>
<hr>

<?php 
} else { 
    // esto es lo que ve el usuario que no es admin
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