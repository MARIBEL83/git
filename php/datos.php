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
// Consulta SQL para obtener los datos de la tabla "usuario"
if(isset($_POST['id'])) {
  // Si se proporcionó un ID, hacer una consulta select para obtener solo ese registro (Actualizar)
  $id = $_POST['id'];
  $sql = "SELECT id, idusuario, Tiempo  FROM cesta WHERE id = $id";
} else {
  // Si no se proporcionó un ID, hacer una consulta select para obtener todos los registros (DataTable)
  $sql = "SELECT id, idusuario, Tiempo FROM cesta";
}

$resultado = mysqli_query($conn, $sql);


// Crear un array con los datos de la tabla "usuario"
$datos = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
  $datos[] = $fila;
}

// Devolver los datos como formato JSON
echo json_encode(array("data" => $datos));

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>