<?php
$usu_ingreso = $POST["id_usuario"] ?? '7';

$_SESSION['usu_ingreso'] = $usu_ingreso;

$query2 = "SELECT * FROM usuarios where id='{$_SESSION['usu_ingreso']}' ";
$result2 =  mysqli_query($conexion, $query2);
$fila2 = mysqli_fetch_assoc($result2);

if (isset($_SESSION["username"]) && $fila2['tipo_usu'] == "administrador") {
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
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./Usuarios.html">Usuarios</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accesos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./Estadisticas.html">Estadisticas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./Facultades.html">Facultades</a>
            </li>
        </ul>
        <span class="navbar-text">
            //ID DE USUARIO//
        </span>
        </div>
    </div>
    </nav>
    <hr>

 <?php }
 else {
    ?>
    
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand " href="./Img/LOGO.png">
        <img src="./Img/LOGO.png" alt="Bootstrap" width="200" height="50">
        </a>
    </div>
    </nav>
    <hr>
 <?php
 }
 ?>