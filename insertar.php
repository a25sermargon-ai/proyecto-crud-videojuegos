<?php include_once "encabezado.php"; ?>
<div class="row">
    <div class="col-12">
        <h1>Registrar videojuego</h1>
        <form action="registrar.php" method="POST">
            <div class="form-group mb-3">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre" class="form-control" type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group mb-3">
                <label for="descripcion">Descripción</label>
                <textarea placeholder="Descripción" class="form-control" name="descripcion" id="descripcion" cols="30" rows="5" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="tipo">Tipo de Videojuego</label>
                <select name="tipo" id="tipo" class="form-control" required>
                    <option value="Esport">Esport</option>
                    <option value="Rol">Rol</option>
                    <option value="Luita">Luita</option>
                    <option value="Altre">Altre</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-secondary" href="listar.php">Volver</a>
            </div>
        </form>
    </div>
</div>
<?php include_once "pie.php"; ?>