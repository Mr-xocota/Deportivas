<?php

include('fpdf17/fpdf.php');


class PDF extends FPDF{
	
	function Header()
{
    // Logo
    $this->Image('DepActDep.png',15,10,30);
    // Arial bold 12
    $this->SetFont('Arial','',10);
    //Desplazamiento a la derecha
		$this->Cell(50);
    // Título
		$this->Cell(80,10,utf8_decode('Lista de alúmnos'), 0,1, 'C');
    // Salto de línea
    $this->Ln(2);
}
	

	
	// crear un Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Tipo de fuente Arial italic 8
  $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
    
    
    function TablaBasica($header)
   {
    //Cabecera
    foreach($header as $col)
    $this->Cell(40,7,$col,1);
    $this->Ln();
   
      $this->Cell(20,5,utf8_decode("Matrícula"),1);
      $this->Cell(55,5,"Nombre",1);
      $this->Cell(20,5,"Sexo",1);
      $this->Cell(35,5,"Carrera",1);
        $this->Cell(20,5,"Semestre",1);
     $this->Cell(40,5,"Actividad",1,0);
    
   } 

    function TablaColores($header)
{
//Colores, ancho de línea y fuente en negrita
$this->SetFillColor(255,0,0);
$this->SetTextColor(255);
$this->SetDrawColor(128,0,0);
$this->SetLineWidth(.3);
$this->SetFont('','B');
//Cabecera

for($i=0;$i<count($header);$i++)
$this->Cell(40,7,$header[$i],1,0,'C',1);
$this->Ln();
//Restauración de colores y fuentes
$this->SetFillColor(224,235,255);
$this->SetTextColor(0);
$this->SetFont('');
        
} 

	}

//Declaración de la hoja
$pdf = new PDF('P','mm','Letter','A4');
$pdf->SetMargins(15,22);
$pdf->AliasNbPages();
$pdf->AddPage();
//segunda pagina
$pdf->TablaBasica($header);

$pdf->TablaColores($header);


//Datos para conectar con la base de datos

$servidor ="localhost";
$usuario ="root";
	$pass = "KkJcd+.39x";
	$base = "Inscripcion";

$conexion = mysqli_connect($servidor, $usuario, $pass);

mysqli_select_db($base);
//recuperacion de datos.

$act=$_POST['actividad'];


$res = mysqli_query($conexion,"SELECT upper(Ncontrol),Nombre,ApePaterno, ApeMaterno, Sexo, Carrera,Grado,Actividad FROM Inscripcion.alumno WHERE Actividad='$act'")or die("consulta erronea");

while($fila = mysqli_fetch_array($res))
{
	$pdf->Cell(20,5,$fila[0],1,'C');
	$pdf->Cell(55,5,$fila[1].' '.$fila[2].' '.$fila[3],1,'C');
    $pdf->Cell(20,5,$fila['Sexo'],1,'C');
	$pdf->Cell(35,5,$fila[4],1,'C');
    $pdf->Cell(20,5,$fila['Grado'],1,'C');
	$pdf->Cell(40,5,$fila['Actividad'],1,0,'C');
    $pdf->Ln();
	
}

$pdf->Output(/*'Lista.pdf','D'*/);

?>