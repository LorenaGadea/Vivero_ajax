<?php

$conexion = mysqli_connect("localhost", "root", "", "vivero") or die(mysqli_error($conexion));
mysqli_set_charset($conexion, "utf8");
$clienteSeleccionado = (string)$_GET["nif"];
$sql = "SELECT * 
        FROM cliente 
        WHERE nif LIKE '$clienteSeleccionado'
        ";
$resultados = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));
$datos = [];
while ($fila = mysqli_fetch_assoc($resultados)) {
    $datos[] = $fila;
}


$jsonOutput=json_encode($datos, JSON_PRETTY_PRINT);
header('Content-Type: application/json');
echo $json;

?>

