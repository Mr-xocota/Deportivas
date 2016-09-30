<?php

if($_POST['buscar'])
{
   include('Modificar.php'); 

}

if($_POST['actualizar'])
{
    require_once('actualizar.php');
}

if($_POST['buscarElim'])
{
   //instrucciones de la consulta
 include_once('Eliminar.php');
}

if($_POST['eliminar'])
{
    include('baja.php');
}


?>





