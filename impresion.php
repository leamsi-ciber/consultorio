<?php


require('fpdf/fpdf.php');

class PDF extends FPDF
{
function Header()
{
    // Logo
    $this->Image('fpdf/logo.jpg', 20, 5, 30, 'png');
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    $this->SetTextColor(25, 174, 194);
    $this->Cell(190, 5, ' DR. VASQUEZ MENDOZA', 0, 0, 'C');
    $this->Ln();
    $this->SetFont('Times', '', 12);
    $this->SetTextColor(25, 174, 194);
    $this->Cell(190,5,'CONSULTORIO MEDICO ',0,0,'C');
    $this->Ln();
    $this->Cell(190,5,'TELEFONO: 849-361-6914 ',0,0,'C');
    $this->Ln();
    $this->SetFont('Times', 'B', 16);
    $this->SetTextColor(23, 32, 42);
    $this->Cell(190,15,'RECETA MEDICA ',0,0,'C');
    $this->Line(20, 40 , 190, 40);
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    $this->SetY(-15);
    // Arial italic 8
    $this->Line(20, 260 , 190, 260);
    $this->SetFont('Times','B',10);
    $this->SetTextColor(86, 101, 115);
    $this->Cell(190, -15, ' CONSULTORIO MEDICO DR. VASQUEZ MENDOZA', 0, 0, 'C');
    $this->Ln();
    $this->SetFont('Times', 'B', 10);
    $this->SetTextColor(86, 101, 115);
    $this->Cell(190,5,'SANTO DOMINGO ESTE, AV. TU IMAGINACION  ',0,0,'C');
    $this->Ln();
    $this->SetFont('Times', 'B', 10);
   // $this->SetTextColor(25, 174, 194);
    $this->Cell(190,15,'TELEFONO: 849-361-6914 ',0,0,'C');
    $this->Ln();
    

   
}
}
require 'libreria/bd/conexion.php';


    $con = conexion::instancia();
$consulta = "SELECT * FROM visitas where id = {$_GET['imp']}";
    $resultado = mysqli_query($con, $consulta);



    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Times','',22);

    while($row = $resultado->fetch_assoc()) {
    
        
        $pdf->Cell(190, 50, $row['receta'], 0, 0, 'C', 0);
    
    }

    $pdf->Output();

?>
