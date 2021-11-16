<?php require_once('../Connections/conexion.php'); ?>
<?php
$corre = $_POST['usuari'];
mysql_select_db($database_conexion, $conexion);
$query_Recordset3 = "SELECT * FROM usuarios WHERE correo = '$usuari'";
$Recordset3 = mysql_query($query_Recordset3, $conexion) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);
if ($totalRows_Recordset3 > 0)
{
$passw = $row_Recordset3['clave'];
$subje = 'Contraseña ELA';
$cabec = 'Soporte de ELA';
$mensa = 'Su clave es '.$passw;
mail($corre, $subje, $mensa, $cabec);
echo '<script language="javascript">alert("REVISE SU CORREO, AHI ESTÁ SU CLAVE");</script>';
header("location:../ventana1.html");
}
else
{
header("location:../ventana2.html ");
}
?>