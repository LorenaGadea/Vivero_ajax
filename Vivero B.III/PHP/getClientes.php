<?php

$conexion = mysqli_connect("localhost", "root", "", "vivero") or die(mysqli_error($conexion));
mysqli_set_charset($conexion, "utf8");

$sql = "SELECT * 
        FROM cliente
        WHERE nif NOT LIKE ''
        ";
$resultados = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
$datos = [];
while ($fila = mysqli_fetch_assoc($resultados)) {
    $datos[] = $fila;
}

echo json_encode($datos); 

mysqli_close($conexion);
?>