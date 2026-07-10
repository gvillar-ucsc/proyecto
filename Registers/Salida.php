<?php
session_start();
require("../BDD/conexion.php"); 

if (isset($_SESSION['id_u']) && isset($_SESSION['id_u_reg'])) {
    $id_usuario = $_SESSION['id_u'];
    $id_u_reg = $_SESSION['id_u_reg'];

    date_default_timezone_set('America/Santiago');
    $fecha = date("Ymd"); 
    $hora = date("His");  

    $consulta_salida = "INSERT INTO registros (fecha, hora, tipo_reg, id_registro_usu, id_u_reg) VALUES ('$fecha', '$hora', 'Salida', '$id_usuario', '$id_u_reg')";
    mysqli_query($conexion, $consulta_salida);

    $update_stat = "UPDATE estadisticas SET personas = GREATEST(personas - 1, 0) WHERE id_stat = $id_u_reg";
    mysqli_query($conexion, $update_stat);
}

$_SESSION = array();
session_destroy();

header("Location: ../index.php");
exit();
?>
<!-- en caso de emergencia usar UPDATE estadisticas SET personas = 0 WHERE id_stat = 1; -->