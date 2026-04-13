<?php
$host = "localhost";
$usuario = "a25sermargon_vj";
$contrasenia = "Futbol07sergi#";
$base_de_datos = "a25sermargon_Videojocs";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;