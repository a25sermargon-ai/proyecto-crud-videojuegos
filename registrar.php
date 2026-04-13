<?php
if (empty($_POST["nombre"]) || empty($_POST["descripcion"]) || empty($_POST["tipo"])) {
    exit("Falten dades");
}

$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$tipo = $_POST["tipo"];

$sentencia = $mysqli->prepare("INSERT INTO videojuegos (nombre, descripcion, tipo) VALUES (?, ?, ?)");
// "sss" significa que enviamos 3 strings (cadenas de texto)
$sentencia->bind_param("sss", $nombre, $descripcion, $tipo);
$sentencia->execute();

header("Location: listar.php");