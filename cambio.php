<?php require_once('../Connections/conexion.php'); ?>
<?php
$usuar = $_POST['correos'];
$passw = $_POST['contra'];
$contr1 = $_POST['nueva'];
$contr2 = $_POST['confirmar'];
If ($cont1 == $cont2)
{
mysql_select_db($database_conexion, $conexion);
$query_Recordset3 = "SELECT * FROM usuarios WHERE correo = '$usuar' and clave  = ‘$passw'";
$Recordset3 = mysql_query($query_Recordset3, $conexion) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
if ($totalRows_Recordset3 > 0)
{
$sqa = "UPDATE usuario SET clave  = '$contr1' WHERE correo = '$usuar'";
$ejecuta = mysqli_query($conexion, $sqa);
header("location:../ventana2.html");
}
else
{
echo '<script language="javascript">alert("HUBO UN ERROR AL CAMBIAR SU CONTRASEÑA");</script>';
header("location:../cambio.html ");
}
}
?>
