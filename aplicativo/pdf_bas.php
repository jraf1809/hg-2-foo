<?php

	require('fpdf/fpdf.php');

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(40,10,utf8_decode('ESTUDIANTES DE LA UNEXCA - GRUPO 6'));
	$pdf->Output();






?>