<?php
include_once "encabezado.php";
$mysqli = include_once "conexion.php";
$id = $_GET["id"];
$sentencia = $mysqli->prepare("SELECT id, nombre, descripcion, tipo FROM videojuegos WHERE id = ?");
$sentencia->bind_param("i", $id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$videojuego = $resultado->fetch_assoc();

if (!$videojuego) {
    exit("No hay resultados para ese ID");
}
?>
<div class="row">
    <div class="col-12">
        <h1>Actualizar videojuego</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $videojuego["id"] ?>">
            <div class="form-group mb-3">
                <label for="nombre">Nombre</label>
                <input value="<?php echo htmlspecialchars($videojuego["nombre"]) ?>" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group mb-3">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" required><?php echo htmlspecialchars($videojuego["descripcion"]) ?></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="tipo">Tipo de Videojuego</label>
                <select name="tipo" id="tipo" class="form-control" required>
                    <option <?php echo $videojuego["tipo"] === "Esport" ? "selected" : "" ?> value="Esport">Esport</option>
                    <option <?php echo $videojuego["tipo"] === "Rol" ? "selected" : "" ?> value="Rol">Rol</option>
                    <option <?php echo $videojuego["tipo"] === "Luita" ? "selected" : "" ?> value="Luita">Luita</option>
                    <option <?php echo $videojuego["tipo"] === "Altre" ? "selected" : "" ?> value="Altre">Altre</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar cambios</button>
                <a class="btn btn-warning" href="listar.php">Cancelar</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>