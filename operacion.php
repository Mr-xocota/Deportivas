<?php 
//disponible para otra cosa
include('conexion.php');
// Recoger los datos del formulario

define($total = 2);

//$Actividad = $_POST['actividad'];

$Actividad = 'Danza';
//echo $Actividad;

$result = mysqli_query($conexion,"SELECT * FROM Inscripcion.alumno where Actividad ='$Actividad' ")or die("error".mysql_error());
$numero = mysqli_num_rows($result); // obtenemos el número de filas

echo "El numero de registros de la tabla es: " .$numero.' '. $Actividad;  // MOSTRAR EL NUEMRO DE REGISTROS


switch($Actividad)
{
    case 'Ajedrez':
        
if($numero == $total)
{

echo "<script>
$(function(){
$('#1').attr('disabled',true);
});
</script>";
    
    // header("location:formulario.html");
   
                  
}
        else{
            
            //Si los registros no llega a su limite insertar
    //echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
     //#############################################################################################################  
    case 'Artes plasticas':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#2').attr('disabled',true);
});
</script>";
   //  header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //###############################################################################################
     case 'Baile moderno':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#3').attr('disabled',true);
});
</script>";
   
  //  header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        
        //#########################################################

 case 'Banda de guerra':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#4').attr('disabled',true);
});
</script>";
   //  header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
//####################################################
         case 'Basquetbol':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#Basquetbol').attr('disabled',true);
});
</script>";
    // header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#################################################
         case 'Cine y animacion':
        
if($numero ==  $total)
{
   echo "<script>
$(function(){
$('#Cine y animacion').attr('disabled',true);
});
</script>";
  //   header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //################################################
         case 'Circulos de lectura':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#Circula de lectura').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //###############################################
         case 'Danza':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#8').attr('disabled',true);
});
</script>";
    // header("location:formulario.html");
   
                  
}
                else{
                      
                    include('datos.php');
        }
        
        break;
        //####################################################
         case 'Escolta y descubierta':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#Escolta y descubierta').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#######################################################
         case 'Futbol':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#Futbol').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#########################################################
         case 'Guitarra basica y canto':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#Guitarra basica y canto').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#########################################################
         case 'Handbol':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#Handbol').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#######################################################
        
         case 'Karate Do':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#Karate Do').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#######################################################
         case 'Pintura':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#Pintura').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //######################################################
         case 'Teakwondo':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#Teakwondo').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //######################################################
         case 'Teatro':
        
if($numero == $total)
{
    echo "<script>
$(function(){
$('#Teatro').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //#######################################################
         case 'Voleibol':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#Voleibol').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
        //######################################################
         case 'Zumba':
        
if($numero == $total)
{
   echo "<script>
$(function(){
$('#Zumba').attr('disabled',true);
});
</script>";
     header("location:formulario.html");
   
                  
}
                else{
            
            //Si los registros no llega a su limite insertar
    echo "<br>"."Aun puedes insertar datos".' '.$numero;
          
                    include('datos.php');
        }
        
        break;
   
        //Fin switch
       
}




mysqli_close($conexion);

 ?>