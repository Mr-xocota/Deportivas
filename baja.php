<?php
include('conexion.php');


$control= $_POST['name'];

echo $control;

mysqli_query($conexion, "DELETE FROM Inscripcion.alumno 
WHERE Ncontrol= '$control'") or die ("error al eliminar datos" .mysqli_error());

header("location:Eliminar.php");
mysqli_close();

?>