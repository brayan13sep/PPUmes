<?php
require '../fpdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
    public function Header()
    {
        // Logo
        $this->Image('../dist/image/logo.png', 10, 8, 33);
        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Movernos a la derecha
        $this->Cell(80);
        // Título
        $this->Cell(50, 10, 'RFID HOSPITAL ', 1, 0, 'C');
        // Salto de línea
        $this->Ln(20);
    }

// Pie de página
    public function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'I', 8);
        // Número de página
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times', '', 12);
$pdf->Output();
