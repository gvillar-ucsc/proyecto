<?php
  require '../../../base_datos/conexion.php';

    // obtener los datos del formulario   
    $id_ubi = $_POST["id_ubi"];
    $tipo_registro = "";
    $hora = $_POST["hora"];
    $id = $_POST["id"];
    $fecha = $_POST["fecha"];
    $id_usuario = $_POST["id_usuario"];

    $query = "SELECT sum(case when tipo_reg='ingreso' then 1 else 0 end) AS ingreso, sum(case when tipo_reg='salida' then 1 else 0 end) AS salida FROM registro where id_reg_usu_ingreso='$id_usuario' ";
    $result =  mysqli_query($conexion, $query);
    $fila = mysqli_fetch_assoc($result);



    if (($fila['ingreso'] - $fila['salida']) == 0){
        $tipo_registro = "ingreso";

    } else if (($fila['ingreso'] - $fila['salida']) == 1){
        $tipo_registro = "salida";

    } else {
        $tipo_registro = "error";

    }

    // insertar los datos en la base de datos
    $query = "INSERT INTO registro (id_reg_ubi,tipo_reg,hora_reg,id_reg_usu_encargado,fecha,id_reg_usu_ingreso) VALUES ('$id_ubi', '$tipo_registro', '$hora','$id', '$fecha', '$id_usuario')";

    // ejecutar la consulta
    $result =  mysqli_query($conexion, $query);

    header("Location: /xampp/proyecto/index.php?p=home");
    exit();
?>
