<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "sampledb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos";

$conn->close();
?>
