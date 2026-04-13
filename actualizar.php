<?php
$mysqli = include_once "conexion.php";


if (!isset($_POST["id"]) || !isset($_POST["nombre"]) || !isset($_POST["tipo"])) {
    exit("Faltan datos en el formulario");
}

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$tipo = $_POST["tipo"];

$sentencia = $mysqli->prepare("UPDATE videojuegos SET nombre = ?, descripcion = ?, tipo = ? WHERE id = ?");

$sentencia->bind_param("sssi", $nombre, $descripcion, $tipo, $id);
$sentencia->execute();

header("Location: listar.php");
exit;