<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

$autor = $_POST['autor'];
$correo = $_POST['correo'];
$sugerencia = $_POST['sugerencia'];

$sql = "INSERT INTO entradas (`Autor`, `Correo Electronico`, `Sugerencia`)
VALUES ('$autor', '$correo', '$sugerencia')";

if ($conn->query($sql) === TRUE) {
  header("Location: ../dist/news.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
