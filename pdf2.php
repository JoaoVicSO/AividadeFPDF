<?php

require('FPDF/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial", "","12.5");

// Cores

$pdf->SetFillColor(0);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0);

// Dados da Tabela

$pdf->Cell(40,6,"Nome",1,0,"C");
$pdf->Cell(40,6,"Curso",1,0,"C");
$pdf->Cell(80,6,"Disciplina",1,0,"C");
$pdf->Cell(35,6,UTF8_DECODE("Média"),1,5,"C");
$pdf->Ln(1);

$pdf->Cell(40,6,"Gledson",1,0,"C");
$pdf->Cell(40,6,"ADS",1,0,"C");
$pdf->Cell(80,6,UTF8_DECODE("Linguagem Técnica de Programação"),1,0,"C");
$pdf->Cell(35,6,"6.5",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(40,6,"Kennet",1,0,"C");
$pdf->Cell(40,6,"ADS",1,0,"C");
$pdf->Cell(80,6,UTF8_DECODE("Linguagem Técnica de Programação"),1,0,"C");
$pdf->Cell(35,6,"7",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(40,6,UTF8_DECODE("João Victor"),1,0,"C");
$pdf->Cell(40,6,"ADS",1,0,"C");
$pdf->Cell(80,6,UTF8_DECODE("Linguagem Técnica de Programação"),1,0,"C");
$pdf->Cell(35,6,"9",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(40,6,"Marcus",1,0,"C");
$pdf->Cell(40,6,"ADS",1,0,"C");
$pdf->Cell(80,6,UTF8_DECODE("Linguagem Técnica de Programação"),1,0,"C");
$pdf->Cell(35,6,"7.5",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(40,6,"Lucas",1,0,"C");
$pdf->Cell(40,6,"ADS",1,0,"C");
$pdf->Cell(80,6,UTF8_DECODE("Linguagem Técnica de Programação"),1,0,"C");
$pdf->Cell(35,6,"6.6",1,5,"C");
$pdf->Ln(1);

$pdf->Cell(40,6,"Gabriel",1,0,"C");
$pdf->Cell(40,6,"ADS",1,0,"C");
$pdf->Cell(80,6,UTF8_DECODE("Linguagem Técnica de Programação"),1,0,"C");
$pdf->Cell(35,6,"7.7",1,5,"C");

$pdf->Output();




?>