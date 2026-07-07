<?php
session_start();
include __DIR__.'/../../../incluir/header.php';

// Obtener los datos del formulario   
$id_ubi = $_POST["id_ubi"];
$tipo_registro = "";
$hora = $_POST["hora"];
$id = $_POST["id"];
$fecha = $_POST["fecha"];
$id_usuario = $_POST["id_usuario"];

// Calcular flujos
$query = "SELECT sum(case when tipo_reg='ingreso' then 1 else 0 end) AS ingreso, sum(case when tipo_reg='salida' then 1 else 0 end) AS salida FROM registro where id_reg_usu_ingreso='$id_usuario' ";
$result = mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($result);

if (($fila['ingreso'] - $fila['salida']) == 0){
    $tipo_registro = "ingreso";
} else if (($fila['ingreso'] - $fila['salida']) == 1){
    $tipo_registro = "salida";
} else {
    $tipo_registro = "error";
}

// Insertar en la BD
$query_insert = "INSERT INTO registro (id_reg_ubi,tipo_reg,hora_reg,id_reg_usu_encargado,fecha,id_reg_usu_ingreso) VALUES ('$id_ubi', '$tipo_registro', '$hora','$id', '$fecha', '$id_usuario')";
$result_insert = mysqli_query($conexion, $query_insert);

// Validar privilegios para redirigir
$query1 = "SELECT * FROM usuarios where id='$id_usuario' ";
$result1 = mysqli_query($conexion, $query1);
$fila1 = mysqli_fetch_assoc($result1);

// Seteamos las variables globales de sesión según el rol encontrado
$_SESSION['usuario_ingreso'] = $id_usuario;
$_SESSION['usu_ingreso']     = $id_usuario;

if ($fila1['tipo_usu'] == "administrador"){
    header("Location: /xampp/proyecto/index.php?p=estadistica/Estadisticas");
    exit();  
} else if ($fila1['tipo_usu'] == "guardia"){
    header("Location: /xampp/proyecto/index.php?p=ubicacion/MenuUbicacion");
    exit();
} else {
    header("Location: /xampp/proyecto/index.php?p=home");
    exit();
}
?>