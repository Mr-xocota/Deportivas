<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Actualizar datos</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet"  href="bootstrap/css/bootstrap.css">
   <link rel="stylesheet" href="css/modificar.css">
   <link rel="stylesheet" href="bootstrap/css/main.css">
    
</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="right"><a href="generarReporte.html">Reportes</a></li>
                   
                   
                       <li><a href="Eliminar.php">Dar de baja</a></li>
                    
                     <li><a href="cerrar.php">Cerrar Sesión</a></li>
                </ul>

            
            </div>
    </nav>
    <br>
    <br>
<div class="container">    

<img class=" img-responsive" src="http://www.itsz.edu.mx/images/images/images/images/novohead.png" alt="Instituto Tecnológico Superior de Zaxapoaxtla"

</div>
<?php

$servidor ="localhost";
$usuario ="root";
$pass="KkJcd+.39x";
$base="Inscripcion";

$conexion= mysqli_connect($servidor,$usuario,$pass,$base) or die ("No se conecta");

    $buscar= $_POST['name'];
      
      

    $dos =mysqli_query($conexion,"SELECT * FROM Inscripcion.alumno WHERE Ncontrol='$buscar' ") or die("error en la consulta");
    

      
  if($fila=mysqli_fetch_array($dos));
  {
        
print("<div  class='form'>");  
      // ETIQUETA EL FORMULARIO
 printf("<form  id='contactform' method='POST' action='seleccionar.php'>");
  //LABEL PARA LA ETIQUETA  
      print ("<h1>Modificar datos del alumno</h1>");
 printf(" <p class='contact'><label>Número de control</label></p>");
      echo"<br>";
//CAMPO DE TEXTO
printf("<input type='text'   name='name' placeholder='Número de control' style='text-transform:uppercase' value='".$fila['Ncontrol']."'>");
    
      //BOTON PARA BUSCAR DATOS 
	          printf("<input class='buttom' name='buscar' value='Buscar' type='submit' >");
      
      //LABEL PARA EL NUMERO DE CONTROL
      printf(" <p class='contact'><label>Nombre</label></p>");
      echo"<br>";
//ETIQUETA PARA AGREGAR EL NOMBRE 
      printf( "<input name='email' type='text' placeholder='Nombre' value='".$fila['Nombre']."'>");
echo"<br>";
       printf(" <p class='contact'><label>Apellido paterno</label></p>");
     echo"<br>";
      //CAMPO DE TEXTO PARA EL APELLIDO
	             printf("<input name='username' placeholder='Apellido paterno' type='text' value='".$fila['ApePaterno']."'>");
      echo"<br>";
         printf(" <p class='contact'><label>Apellido materno</label></p>");
       printf("<input name='user' placeholder='Apellido materno' type='text' value='".$fila['ApeMaterno']."'>");
      echo"<br>";
      
         
      //BOTON PARA ACTUALIZAR DATOS
        printf("<input class='buttom-right' name='actualizar'  value='Actualizar' type='submit'>");
    printf ("</form>");
  


  printf("</div>");

  }
    
  
    
    mysqli_close($conexion);

    

    
?>


  
  <!-- <footer>
        <small>Derechos reservados</small>
    </footer>-->
</body>
    </body>
</html>