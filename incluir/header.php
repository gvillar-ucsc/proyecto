<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
<?php
  // sobre lo de arriba, es un codigo que se repite en cadaarchivo por eso se creo aparte para usar require y llamarlo desde su dirrecion
  // dir contiene un valor y es el valor de la ruta de este archivo de tal modo que al tener un require dentro de muchos require el programa no busca desde el index sino que desde el archivo que esta consultando
  require __DIR__ . '/../base_datos/conexion.php';
?>