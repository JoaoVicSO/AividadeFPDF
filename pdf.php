<?php

require('FPDF/fpdf.php');

// Dados da tabela
function LoadData($file)
{

	$lines = file($file);
	$data = array();
	foreach($lines as $line)
		$data[] = explode(';',trim($line));
	return $data;
}


$pdf = new FPDF();

// Cor

$pdf->SetFillColor(225, 225, 225);
$pdf->SetDrawColor(1, 3, 2);

// Tabela
$data = LoadData('FPDF/alunos.csv');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 14);


foreach($data as $row) {
    foreach($row as $cell) {
        $pdf->Cell(40, 10, $cell, 1, 0, 'C', true);
    }
    $pdf->Ln();
}

// Enviar o arquivo para o navegador
$pdf->Output();

?>