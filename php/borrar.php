<?php
// Conexión a la base de datos
$servidor = "localhost";
$usuario = "Maribel";
$contrasena = "17041983";
$basedatos = "vegabbdd";

$conn = mysqli_connect($servidor, $usuario, $contrasena, $basedatos);

if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

// Extrae el id de usuario a eliminar
$id = $_POST["id"];

// Consulta SQL para eliminar el usuario de la tabla "usuario"
$sql = "DELETE FROM cesta WHERE id=$id";
if(mysqli_query($conn, $sql)) {
    echo "Venta eleminada correctamente";
} else {
    echo "Error al eliminar la cesta: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>