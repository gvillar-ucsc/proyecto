<?php
    include_once __DIR__ . '/../../../incluir/header.php';

    $id = $_GET["id"];

    $query = "DELETE FROM usuarios WHERE id=".$id.";";

    $result =  mysqli_query($conexion, $query);

    header("Location: ../../../index.php?p=facultades/Facultades");
exit();
?>