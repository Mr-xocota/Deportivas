<?php
include('conexion.php');

$Mcontrol= $_POST['name'];
$Mnom = $_POST['email'];
$Mape = $_POST['username'];
$MapeM = $_POST['user'];


$conexion= mysqli_connect($servidor,$usuario,$pass) or die ("No se conecta");

mysqli_select_db($base);
 

//Instrucción para actualizar el saldo de un alumno de la base de datos.

$modAlum = mysqli_query($conexion,"UPDATE Inscripcion.alumno
SET Nombre  ='$Mnom', ApePaterno='$Mape', ApeMaterno='$MapeM'
WHERE Ncontrol='$Mcontrol'") or die("No se actualizaron los datos");
 //para que te muestre el archivo  de actualizar.php despues de recargar datos.
//header("location:actualizar.php");

header("location:Modificar.php");
//Encargada de cerrar la conexion con el servidor.
mysqli_close($conexion);




?>

