<?php
    include_once __DIR__ . '/../../../incluir/header.php';
    // obtener los datos del formulario
    $nombre_fac = $_POST["nombre_fac"];
    $calle_fac = $_POST["calle_fac"];
    $calle_numero = $_POST["calle_numero"];
    $id_fac_ubi = $_POST["id_fac_ubi"];

    // insertar los datos en la base de datos
    $insert_facultad = "INSERT INTO facultades (nombre_fac, calle_fac, calle_numero, id_fac_ubi) VALUES ('$nombre_fac', '$calle_fac','$calle_numero','$id_fac_ubi')";

    // ejecutar la consulta
    $crear_facultad =  mysqli_query($conexion, $insert_facultad);

    // redireccionar a la pagina de usuarios
    header("Location: ../../../index.php?p=facultades/Facultades");
?>
