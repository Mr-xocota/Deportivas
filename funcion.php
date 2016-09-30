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
		$this->Cell(150,10,utf8_decode('LISTA DE ATENCIÓN PARA LOS ALUMNOS'), 0,1, 'C');
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
    
    
    //caraga de preguntas
    
    function Preguntas($preg)
    {
    $this->cell(50,5,utf8_decode('1. ¿Te han diagnosticado algún problema cardiaco?'),0,1);  
        
            $this->cell(50,5,utf8_decode('2. ¿Tienes dolores en el corazón o pecho con frecuencia y sin causa alguna?'),0,1);    

            $this->cell(50,5,utf8_decode('3. ¿Sueles sentirte cansado con mareos frecuentes o haber perdido el conocimiento sin alguna causa aparente?'),0,1);    

            $this->cell(50,5,utf8_decode('4. ¿Tienes dolores en los huesos o articulaciones por alguna artritis u otra causa que manifieste ardor con cualquier movimiento?'),0,1);    
    $this->cell(50,5,utf8_decode('5. ¿Toma algún medicamento por enfermedad crónica?'),0,1);    
   
        $this->cell(50,5,utf8_decode('6. ¿Existe alguna causa no mencionada aquí por la cual no debas realizar exfuerzo físico?'),0,1);    

            $this->cell(50,5,utf8_decode('7. ¿Tienes dolores en los huesos o articulaciones por alguna artritis u otra causa que manifieste ardor con cualquier movimiento?'),0,1);    

    }
    
    //#############################################
    function TablaBasica($header)
   {
        $this->SetFont('Arial','',8);
    //Cabecera
    foreach($header as $col)
    $this->Cell(40,7,$col,1);
    $this->Ln();
   
      $this->Cell(20,5,utf8_decode("Matrícula"),1);
      $this->Cell(70,5,"Nombre",1);
      $this->Cell(10,5,"Preg 1",1);
      $this->Cell(10,5,"Preg 2",1);
        $this->Cell(10,5,"Preg 3",1);
     $this->Cell(10,5,"Preg 4",1);
    $this->Cell(10,5,"Preg 5",1);
        $this->Cell(10,5,"Preg 6",1);
        $this->Cell(10,5,"Preg 7",1);
        $this->Cell(70,5,"Preg 5, Medicamento",1);
        $this->Cell(75,5,utf8_decode("Preg 6, Motivo por no realizar esfuerzo físico"),1);
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
$pdf = new PDF('L','mm','Legal');
$pdf->SetMargins(15,22);
$pdf->AliasNbPages();
$pdf->AddPage();
//segunda pagina
$pdf->Preguntas($preg);
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


$res    = mysqli_query ($conexion,"select DISTINCT alumno.Ncontrol,alumno.Nombre, alumno.ApePaterno, alumno.ApeMaterno, aten_alum.proble_cardia,
  aten_alum.dolor_pec_cora, aten_alum.cansa_mareos, aten_alum.dolor_hue_articula,
  aten_alum.medi_enferCronica, aten_alum.No_ezfuerzofisico, aten_alum.artrits_ardor_por_movimi, aten_alum.enfeCroTxt,
  aten_alum.esfuerzoTxt from Inscripcion.alumno, Inscripcion.aten_alum where alumno.Ncontrol = aten_alum.idaten_alum") or die ("error al insertar");

while($fila = mysqli_fetch_array($res))
{
	$pdf->Cell(20,5,$fila[0],1,'C');
	$pdf->Cell(70,5,$fila[1].' '.$fila[2].' '.$fila[3],1,'C');
    $pdf->Cell(10,5,$fila[4],1,'C');
	$pdf->Cell(10,5,$fila[5],1,'C');
    $pdf->Cell(10,5,$fila[6],1,'C');
	$pdf->Cell(10,5,$fila[7],1,0,'C');
	$pdf->Cell(10,5,$fila[8],1,0,'C');
	$pdf->Cell(10,5,$fila[9],1,0,'C');
	$pdf->Cell(10,5,$fila[10],1,0,'C');
    $pdf->Cell(70,5,utf8_decode($fila[11]),1,0,'C');
    $pdf->Cell(75,5,utf8_decode($fila[12]),1,0,'C');
    
    $pdf->Ln();
	
}

$pdf->Output(/*'Lista.pdf','D'*/);

?>