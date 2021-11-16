<?php require_once('../Connections/conexion.php'); ?>
<?php
$nombr = strtoupper($_POST['nombre']);
$apell = strtoupper($_POST['apellid']);
$corre = $_POST['correo'];
$clave = $_POST['contra'];
$fenac = $_POST['nacimi'];
$grupo = $_POST['grupo'];
$gener = $_POST['genero'];
mysqli_select_db($conexion,$database_conexion);
$sqa = "INSERT INTO usuarios (nombre, apellido, correo, clave, fenac, grupo, genero)
values ('$nombr', '$apell','$corre', '$clave','$fenac', '$grupo','$gener')";
$ejecuta = mysqli_query($conexion, $sqa);
header('location:../acciones/signin.html');
?>