<?php
    include_once __DIR__ . '/../../../incluir/header.php';

    // obtener los datos del formulario
    $nombre_fac = $_POST["nombre_fac"];
    $calle_fac = $_POST["calle_fac"];
    $calle_numero = $_POST["calle_numero"];
    $id_fac_ubi = $_POST["id_fac_ubi"];
    $id_fac = $_POST["id_fac"];
    // actualizar los datos en la base de datos
    $actualizar_facultad = "UPDATE facultades SET nombre_fac='$nombre_fac', calle_fac='$calle_fac', calle_numero='$calle_numero', id_fac_ubi='$id_fac_ubi' WHERE id_fac = ".$id_fac.";";

    // ejecutar la consulta
    $ejecutar_update_fac =  mysqli_query($conexion, $actualizar_facultad);

    // redireccionar a la pagina de usuarios
    header("Location: ../../../index.php?p=facultades/Facultades");
?>