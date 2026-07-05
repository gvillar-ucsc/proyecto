<?php

include 'incluir/header.php';
include 'incluir/navbar.php';

$ubi = $_GET["nombre_ubi"] ?? null;

$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

require_once 'pages/' . $pagina . '.php';
?>

