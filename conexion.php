<?php

$servidor ="localhost";
$usuario ="root";
	$pass = "KkJcd+.39x";
	$base = "Inscripcion";

$conexion = mysqli_connect($servidor, $usuario, $pass);
if(mysqli_connect_error($conexion)){
	
echo"No se a podido conectar ".mysqli_connect_error();	
	
} else{
    mysqli_select_db($conexion,$base);

	//echo"Conexion satisfactoria";
}

?>