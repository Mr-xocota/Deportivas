
<?php

$contr = $_POST['pass'];

$hash = crypt($contr);


if(isset($hash) && isset($_POST["usuario"])){
    
  
$servidor ="localhost";
$usuario ="root";
	$pass = "KkJcd+.39x";
	$base = "Inscripcion";

$conexion = mysqli_connect($servidor, $usuario, $pass);
mysqli_select_db($base,$conexion);
    
$consulta= mysqli_query($conexion,"SELECT * FROM Inscripcion.sesion WHERE usuario='".$_POST["usuario"]."' and pasword='0".$_POST["pass"]."'") or die("consulta erronea");
    
    

    
    if(mysqli_num_rows($consulta)>0)
    {
        session_start();
        
        $_SESSION['usuario']= $_POST["usuario"];
        
        header("location:generarReporte.html");
    }
    else{
        
        echo'<script> alert("Usuario o contraseña son incorrectos."); </script>';
               // header("location:logueo.html");

       }
   
}

    
mysqli_close($conexion);

 ?>
 

 



