<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "psicologia_db";  // nombre actualizado de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO contactos (nombre, correo_electronico, telefono, mensaje) 
        VALUES ('$nombre', '$correo_electronico', '$telefono', '$mensaje')";

// Ejecutar la consulta y verificar si se insertaron los datos correctamente
if ($conn->query($sql) === TRUE) {
    echo "Mensaje enviado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
