<?php
session_start();
require("../../BDD/conexion.php");

if (isset($_GET['id_u']) && !empty($_GET['id_u'])) {
    $id_u = $_GET['id_u'];

    $consulta = "DELETE FROM usuarios WHERE id_u = ?";
    
    if ($stmt = mysqli_prepare($conexion, $consulta)) {
        mysqli_stmt_bind_param($stmt, "i", $id_u);
        
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../User/Usuarios.php?mensaje=eliminado");
            exit();
        } else {
            echo "Error al intentar eliminar el usuario.";
        }
        
        mysqli_stmt_close($stmt);
    }
} else {
    header("Location: ../User/Usuarios.php");
    exit();
}

mysqli_close($conexion);
?>