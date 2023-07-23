<?php

$nombre = $_POST['datn'];
$telefono = $_POST['dattel'];
$correo = $_POST['datcor'];
$mensaje = $_POST['datmensaje'];

echo"<h2> Información recibida del cliente </h2>";
echo "nombre: " . $nombre . "<br>";
echo "telefono: " . $telefono .  "<br>";
echo "correo: " . $correo . "<br>";
echo "mensaje: " . $mensaje . "<br>";

$db_server = "localhost";
$db_user = "root";
$db_pass = "2403";
$db_database = "proyecto";

$conexion = mysqli_connect($db_server,$db_user,$db_pass,$db_database);

if (mysqli_connect_errno()){
	echo "No se logró establecer la conexión";
}
else
{
	$sql_insert = "INSERT INTO contactos (nombre,telefono,correo,mensaje) values ('$nombre', '$telefono', '$correo', '$mensaje')";

	$resultado = mysqli_query($conexion,$sql_insert);  
	if ($resultado == false){
		echo "Error en la inserción de los datos";
	}
	else
	{
		echo "Registro guardado correctamente";
	}
}

?>

