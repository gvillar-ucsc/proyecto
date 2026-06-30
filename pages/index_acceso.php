<?php


    // El fragmento de html que contiene la cabecera de nuestra web
    require_once 'includes/header.php';
    
    $consulta = "SELECT * FROM nombre de tabla";
    $resultado = mysqli_query($conexion,$consulta);

    // solo esta aqui para mostrar como se ve sin que hacer la coneccion, esta parte se eliminara
?>
<div data-bs-spy="scroll" class="row">
    <?php
        while($row=mysqli_fetch_assoc($resultado)){
            $nombre_hubicacion = $row["nombre"];
            echo "<button  type='button' class='btn col-6 btn-outline-dark'>".$nombre_hubicacion."</button>";

        }
    ?>
</div>