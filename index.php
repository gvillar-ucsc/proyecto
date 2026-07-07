<?php
session_start(); 

include 'incluir/header.php';
include 'incluir/navbar.php';

// Primero calculamos cuál es la ubicación actual
if (isset($_GET['id_ubi'])) {
    $ubicacion_actual = $_GET['id_ubi'];
} else {
    $ubicacion_actual = 1;
}

// Ahora que ya sabemos el número, LO GUARDAMOS en la sesión
$_SESSION["id_ubi"] = $ubicacion_actual;

// Cambiamos la consulta para usar la variable limpia que acabamos de calcular arriba
$query = "SELECT * FROM ubicaciones where id_ubi='$ubicacion_actual' ";
$result = mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($result);

if (!isset($_SESSION['encargado']) || empty($_SESSION['encargado'])) {
    $_SESSION['encargado'] = 5;
}
$encargado = $_SESSION['encargado'];

$query3 = "SELECT * FROM usuarios where id='{$_SESSION['encargado']}' ";
$result3 = mysqli_query($conexion, $query3);
$fila3 = mysqli_fetch_assoc($result3);

$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';
require_once 'pages/' . $pagina . '.php';
?>