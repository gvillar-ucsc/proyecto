<?php
    include_once __DIR__ . '/../../../incluir/header.php';

    // obtener los datos del formulario
 
    $nombre_ubi   = $_POST["nombre_ubi"];
    $calle_fac    = $_POST["calle_fac"];
    $calle_numero = $_POST["calle_numero"];
    $id_ubi       = $_POST["id_ubi"];

    // actualizar los datos en la base de datos
    $update_ubicacion = "UPDATE ubicaciones SET nombre_ubi = '$nombre_ubi', calle_fac = '$calle_fac', calle_numero ='$calle_numero' WHERE id_ubi = ".$id_ubi.";";

    // ejecutar la consulta
    $actualizar_ubicacion =  mysqli_query($conexion, $update_ubicacion);

    // redireccionar a la pagina de usuarios
    header("Location: ../../../index.php?p=ubicacion/Ubicacion");
?>