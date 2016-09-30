<?php
include('conexion.php');

$uno= $_POST['preg1'];
$dos= $_POST['preg2'];
$tres= $_POST['preg3'];
$cuatro= $_POST['preg4'];
$cinco= $_POST['preg5'];
$seis= $_POST['preg6'];
$siete= $_POST['preg7'];
$Matricula = $_POST['control'];
$cincotxt= $_POST['preg51'];
$seistxt = $_POST['preg62'];    

echo $uno.'<br>'.$dos.'<br>'.$tres.'<br>'.$cuatro.'<br>'.$cinco.'<br>'.$seis.'<br>'.$siete.'<br>'.$Matricula;


 $insert = mysqli_query($conexion,"INSERT INTO Inscripcion.aten_alum 
 VALUES ('$Matricula','$uno','$dos','$tres','$cuatro','$cinco','$siete','$seis','$cincotxt','$seistxt')") or die("error en la integracion");
 
header("location:atencion.html");

mysqli_close($conexion);
?>