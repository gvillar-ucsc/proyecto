<?php
// te permite recoocer el codigo $_SESSION[] que es una variable que pueden compartir todos los archivos
session_start(); 

// incluimos el archivo header.php de tal modo que al iniciar este archivo se crea todo lo que cotenga dentro header.php
include 'incluir/header.php';

// si no se reconoce el id o esta vacio para quien ingreso su id sera 7 que es el id de todo quien no tenemos registro
if (!isset($_SESSION['usu_ingreso']) || empty($_SESSION['usu_ingreso'])) {
    $_SESSION['usu_ingreso'] = 7; 
}

// es necesario guardar glovalmente el usuario que ingreso para que el archivo que valida si es guardia, admin o usuario comun reaccione correctamente
$usu_ingreso = $_SESSION['usu_ingreso'];

// es el valor gloval del encargado del control de acceso y si es ta vacio o no existe es 5 un id designado para iniciar el programa
if (!isset($_SESSION['encargado_id']) || empty($_SESSION['encargado_id'])) {
    $_SESSION['encargado_id'] = 5;
}

// se realiza la consulta del encargado para en el index para que todos los archivos puedan realizar la conulta y saber si es admin, guardia o otro
$select_usuarios_id = "SELECT * FROM usuarios where id='{$_SESSION['encargado_id']}' ";
$result_select_usuarios_id = mysqli_query($conexion, $select_usuarios_id);
$fila_result_select_usuarios_id = mysqli_fetch_assoc($result_select_usuarios_id);

//consulta si la ubiacion si el id esta existe y de no existir es 1 , un valor de inicio
if (isset($_GET['id_ubi'])) {
    $_SESSION["id_ubi"] = $_GET['id_ubi'];
} elseif (!isset($_SESSION['id_ubi'])) {
    $_SESSION["id_ubi"] = 1; // Ubicación por defecto
}

// con el valor global se consulta la ubicacion para que en home.php pueda mostrar el nombre de la ubiacion, no el id
$select_ubicacion_id = "SELECT * FROM ubicaciones where id_ubi='{$_SESSION["id_ubi"]}' ";
$result_select_ubicacion_id = mysqli_query($conexion, $select_ubicacion_id);
$fila_select_ubicacion_id = mysqli_fetch_assoc($result_select_ubicacion_id);


// una ves se realizaron las consultas que necesita el nav se carga el archivo nav y todo lo que tiene dentro
include 'incluir/navbar.php';

// se crea una variable que almacena la direccion de las siguientes paginas de tal modo que siempre estamos dentro de index durante todo el programa
// $pagina es = a variable p que se llega por metodo $_get y si esta vacio , como cuanto se inicia el programa, es igual a home
$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';

// esto indica que require un archivo que se ubica dentro de pages del mismo valor de la variable y que es de tipo php
require_once 'pages/' . $pagina . '.php';
?>