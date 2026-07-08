<?php
    include_once __DIR__ . '/../../../incluir/header.php';
    // obtener los datos del formulario
    $nombre_ubi = $_POST["nombre_ubi"];
    $calle_fac = $_POST["calle_fac"];
    $calle_numero = $_POST["calle_numeracion"];

    // insertar los datos en la base de datos
    $insert_ubicaciones = "INSERT INTO ubicaciones (nombre_ubi, calle_fac, calle_numero ) VALUES ('$nombre_ubi','$calle_fac', '$calle_numero')";

    // ejecutar la consulta
    $creacion_ubicacion =  mysqli_query($conexion, $insert_ubicaciones);

    // redireccionar a la pagina de usuarios
    header("Location: ../../../index.php?p=ubicacion/Ubicacion");
?>
