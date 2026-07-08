<?php
    include_once __DIR__ . '/../../../incluir/header.php';
    // obtener los datos del formulario
    $nombre_usu = $_POST["nombre_usu"];
    $tipo_usu = $_POST["tipo_usu"];

    // insertar los datos en la base de datos
    $query = "INSERT INTO usuarios (nombre_usu, tipo_usu) VALUES ('$nombre_usu', '$tipo_usu')";

    // ejecutar la consulta
    $result =  mysqli_query($conexion, $query);

    // redireccionar a la pagina de usuarios
    header("Location: ../../../index.php?p=usuarios/Usuarios");
?>
