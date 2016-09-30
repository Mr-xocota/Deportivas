<?php 

include('conexion.php');
$dato=$_POST['dat'];

$consulta="SELECT * FROM alumno where Actividad='$dato'";
$query=mysqli_query($conexion,$consulta);
$total=mysqli_num_rows($query);
	if ($total==3) {
		echo "limite";
	}else{
		echo "espacio";
	}
 ?>