<?php
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, descripcion, tipo FROM videojuegos");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
include_once "encabezado.php";
?>

<div class="row">
    <div class="col-12">
        <h1 class="mb-4">Lista de Videojuegos</h1>
        <a href="insertar.php" class="btn btn-success mb-3">Añadir Nuevo Videojuego</a>
        
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($videojuegos as $videojuego) { 
                    $claseFila = "";
                    if ($videojuego["tipo"] == "Esport") {
                        $claseFila = "table-success";
                    } else if ($videojuego["tipo"] == "Rol") {
                        $claseFila = "table-primary";
                    } else if ($videojuego["tipo"] == "Luita") {
                        $claseFila = "table-danger";
                    } else if ($videojuego["tipo"] == "Altre") {
                        $claseFila = "table-info";
                    }
                ?>
                    <tr class="<?php echo $claseFila; ?>">
                        <td><?php echo $videojuego["id"] ?></td>
                        <td><strong><?php echo htmlspecialchars($videojuego["nombre"]) ?></strong></td>
                        <td><?php echo htmlspecialchars($videojuego["descripcion"]) ?></td>
                        <td><?php echo htmlspecialchars($videojuego["tipo"]) ?></td> <td>
                            <a class="btn btn-warning btn-sm text-dark" href="editar.php?id=<?php echo $videojuego["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="eliminar.php?id=<?php echo $videojuego["id"] ?>" onclick="return confirm('Segur que vols eliminar-lo?')">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include_once "pie.php"; ?>