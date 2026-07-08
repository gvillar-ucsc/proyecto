<?php
    include_once __DIR__ . '/../../../incluir/header.php';

    $id_ubi = $_GET["id_ubi"];

    $delete_ubicaciones = "DELETE FROM ubicaciones WHERE id_ubi=".$id_ubi.";";

    $eliminar_ubicacion =  mysqli_query($conexion, $delete_ubicaciones);

    header("Location: /xampp/proyecto/index.php?p=ubicacion/Ubicacion");
    exit();
?>