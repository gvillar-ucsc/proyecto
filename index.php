<?php

include 'incluir/header.php';
include 'incluir/navbar.php';

$ubi = $_GET["id_ubi"] ?? 1;

$query = "SELECT * FROM ubicaciones where id_ubi='$ubi' ";
$result =  mysqli_query($conexion, $query);
$fila = mysqli_fetch_assoc($result);

$encargado = $_GET["id"] ?? 5;

$query1 = "SELECT * FROM usuarios where id='$encargado' ";
$result1 =  mysqli_query($conexion, $query1);
$fila1 = mysqli_fetch_assoc($result1);


$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

require_once 'pages/' . $pagina . '.php';
?>

