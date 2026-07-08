<?php
    include_once __DIR__ . '/../../../incluir/header.php';

    // obtener los datos del formulario
    $id= $_POST["id"];
    $nombre_usu = $_POST["nombre_usu"];
    $tipo_usu = $_POST["tipo_usu"];

    // actualizar los datos en la base de datos
    $query = "UPDATE usuarios SET nombre_usu = '$nombre_usu', tipo_usu = '$tipo_usu' WHERE id = ".$id.";";

    // ejecutar la consulta
    $result =  mysqli_query($conexion, $query);

    // redireccionar a la pagina de usuarios
    header("Location: ../../../index.php?p=usuarios/Usuarios");
?>