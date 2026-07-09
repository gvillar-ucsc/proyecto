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

// select usado para contar cuantos ingresas y salen
$select_suma_tipo_reg = "SELECT sum(case when tipo_reg='ingreso' then 1 else 0 end) AS ingreso, sum(case when tipo_reg='salida' then 1 else 0 end) AS salida FROM registro where id_reg_usu_ingreso='$id_usuario' ";
$result_select_suma_tipo_reg = mysqli_query($conexion, $select_suma_tipo_reg);
$fila_result_select_suma_tipo_reg = mysqli_fetch_assoc($result_select_suma_tipo_reg);

if (($fila_result_select_suma_tipo_reg['ingreso'] - $fila_result_select_suma_tipo_reg['salida']) == 0){
    $tipo_registro = "ingreso";
} else if (($fila_result_select_suma_tipo_reg['ingreso'] - $fila_result_select_suma_tipo_reg['salida']) == 1){
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


if ($fila1['tipo_usu'] == "administrador"){
    header("Location: /xampp/proyecto/index.php?p=estadistica/Estadisticas");
    $_SESSION['encargado_id'] = $id_usuario;
    $_SESSION['usu_ingreso']     = $id_usuario; 
    exit();  
} else if ($fila1['tipo_usu'] == "guardia"){
    header("Location: /xampp/proyecto/index.php?p=ubicacion/MenuUbicacion");
    $_SESSION['encargado_id'] = $id_usuario;
    $_SESSION['usu_ingreso']     = $id_usuario;
    exit();

} else {
    header("Location: /xampp/proyecto/index.php?p=home");
    exit();
}
?>