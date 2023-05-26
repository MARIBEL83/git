<?php
$servername = "localhost";
$username = "Maribel";
$password = "17041983";
$dbname = "vegabbdd";

// Crea la conexión con la base de datos
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica si la conexión ha tenido éxito
if ($conn->connect_error) {
  die("La conexión ha fallado: " . $conn->connect_error);
}

// Recupera los datos del formulario
$tiempo = $_POST["Tiempo"];

$usuario = 1;

// Prepara la consulta SQL para insertar los datos en la tabla de la base de datos
$sql = "INSERT INTO cesta (idusuario, Tiempo)
VALUES ( '$usuario', '$tiempo')";

if (mysqli_query($conn, $sql)) {
  echo "Datos guardados correctamente";
} else {
  echo "Error al actualizar los datos: " . mysqli_error($conn);
}

// Cierra la conexión con la base de datos
$conn->close();
?>