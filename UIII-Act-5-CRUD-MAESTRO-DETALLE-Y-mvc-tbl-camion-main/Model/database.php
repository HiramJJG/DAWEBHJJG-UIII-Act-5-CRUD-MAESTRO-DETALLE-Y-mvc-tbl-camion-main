<?php
class Database
{
    // Esta función permite la conexión al SGBD: MariaDB.
    // host = tipo de conexión local - 'localhost'.
    // dbname = nombre de la base de datos.
    // charset = utf8, indica la codificación de caracteres utilizada.
    // root = nombre de usuario (solo para fines académicos=root).
    // '' = contraseña del root (solo para fines académicos=root).

    public static function Conectar()
    {
        $usuario = 'root'; // Nombre de usuario
        $contrasena = ''; // Contraseña

        try {
            $conductor = new PDO('mysql:host=localhost;dbname=central_camionera;charset=utf8', $usuario, $contrasena);
            // Filtrando posibles errores de conexión.
            $conductor->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conductor;
        } catch (PDOException $ex) {
            // Manejar cualquier excepción que pueda ocurrir durante la conexión.
            // Por ejemplo: error_log($ex->getMessage());
            return null;
        }
    }
}
?>





