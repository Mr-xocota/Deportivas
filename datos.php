<?php 

include('conexion.php');

// Recoger los datos del formulario
// variables para la tabla actividad
$Actividad = $_POST['actividad'];
//Variable para la tabla alumno
$Paterno =  $_POST['paterno'];
$Materno =  $_POST['materno'];
$Nombre = $_POST['nombre'];
$Carrera = $_POST['carrera'];
$semestre = $_POST['grado'];
$Matricula = $_POST['matricula'];
$Sexo = $_POST['sexo'];
$Sangre = $_POST['sangre'];
$Alergias = $_POST['alergias'];
// variables para la tabla tallas

$Estatura = $_POST['estatura'];
$Peso = $_POST['kilos'];
$Calzado = $_POST['zapato'];
$Playera = $_POST['pla'];
$Short = $_POST['short'];
$Pans = $_POST['pans'];

//variables para la tabla direccion 

$Domicilio = $_POST['calle'];
$Numero = $_POST['numero'];
$Colonia = $_POST['colonia'];
$Municipio = $_POST['municipio'];
$Entidad = $_POST['entidad'];
$CP =$_POST['cpostal'];
$Telefono = $_POST['tel'];
$Correo = $_POST['correo'];
$FechIns = $_POST['ingreso'];
//tabla padre o tutor
$TutorPat =  $_POST['Tupaterno'];
$TutorMat =  $_POST['Tumaterno'];
$TutorNom = $_POST['Tunombre'];
$TutorTel = $_POST['Tutel'];


$sql = mysqli_query($conexion,"INSERT INTO Inscripcion.alumno (Ncontrol,Nombre,ApePaterno,ApeMaterno,Carrera,Sexo,TipoSangre,Alergias,Actividad,Grado) VALUES ('$Matricula','$Nombre', '$Paterno','$Materno','$Carrera','$Sexo','$Sangre','$Alergias','$Actividad','$semestre')") or die("error al insertar");

$sqldos = mysqli_query($conexion,"INSERT INTO Inscripcion.tutor (Nombre,ApePat,ApeMat,Telefono,AlumTutor)VALUES ('$TutorNom','$TutorPat','$TutorMat','$TutorTel','$Matricula')")or die("erros en la insercion");

$sqltres = mysqli_query($conexion,"INSERT INTO Inscripcion.tallas (Estatura,Peso,Calzado,playera,Short,Pans,AlumTalla)  VALUES ('$Estatura','$Peso','$Calzado','$Playera','$Short','$Pans','$Matricula')");

$sqlcua = mysqli_query($conexion,"INSERT INTO Inscripcion.direccionAlumno (CodigoPosta, Calle,Numero,Colonia,Municipio,Entidad,Telefono,Email,FechInscr,AlumDir) VALUES ('$CP','$Domicilio','$Numero','$Colonia','$Municipio','$Entidad','$Telefono','$Correo','$FechIns','$Matricula')");



/*header("location:formulario.html");*/


mysqli_close($conexion);

 ?>

