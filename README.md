# CRUD de Videojuegos - PHP & MySQLi

## Autor
Hecho por a25sermargon en dam.inspedralbes.cat

## Descripción
Aplicación CRUD desarrollada en PHP procedural con MySQLi para la gestión de una base de datos de videojuegos. Proyecto para la AEA5.2.

## Estructura de la Base de Datos
```sql
CREATE TABLE videojuegos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    tipo ENUM('Esport', 'Rol', 'Luita', 'Altre') NOT NULL
);
