<?php
session_start(); 

include 'incluir/header.php';

// 1. Validar y asignar variables por defecto si no existen
if (!isset($_SESSION['usu_ingreso']) || empty($_SESSION['usu_ingreso'])) {
    $_SESSION['usu_ingreso'] = 7; 
}
$usu_ingreso = $_SESSION['usu_ingreso'];

if (!isset($_SESSION['usuario_ingreso']) || empty($_SESSION['usuario_ingreso'])) {
    $_SESSION['usuario_ingreso'] = 5;
}
$usuario_ingreso = $_SESSION['usuario_ingreso'];

// 2. Controlar la ubicación actual de forma segura
if (isset($_GET['id_ubi'])) {
    $_SESSION["id_ubi"] = $_GET['id_ubi'];
} elseif (!isset($_SESSION['id_ubi'])) {
    $_SESSION["id_ubi"] = 1; // Ubicación por defecto
}

// 3. Consultas a la Base de Datos
$query = "SELECT * FROM ubicaciones where id_ubi='{$_SESSION["id_ubi"]}' ";
$result = mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($result);

$query3 = "SELECT * FROM usuarios where id='{$_SESSION['usuario_ingreso']}' ";
$result3 = mysqli_query($conexion, $query3);
$fila3 = mysqli_fetch_assoc($result3);

// 4. AHORA SÍ incluimos el Navbar, porque ya conoce los datos de $fila3
include 'incluir/navbar.php';

// 5. Carga de páginas dinámicas
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';
require_once 'pages/' . $pagina . '.php';
?>