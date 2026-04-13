<?php
$mysqli = include_once "conexion.php";
$stmt = $mysqli->prepare("DELETE FROM videojuegos WHERE id = ?");
$stmt->bind_param("i", $_GET["id"]);
$stmt->execute();
header("Location: listar.php");