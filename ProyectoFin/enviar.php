<?php
include(db.php); 
if (isset($_POST['Enviar'])) {
$nombre = $_POST['datn'];
$telefono = $_POST['dattel'];
$correo = $_POST['datcor'];
$mensaje = $_POST['datmensaje'];

$sql_insert="INSERT INTO ClienteD(nombre,telefono,correo,mensaje) values('$nombre','$telefono','$correo','$mensaje')";
$resultado=mysql_query($conexion,$sql_insert);
if ($resultado==false) {
	echo "error al insertar el registro"}
	else {
		section["Location:index.php"];
	}



}
?>