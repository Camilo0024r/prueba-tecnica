<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "cineabc";

// Creación de la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión es exitosa
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
  }
  

?>