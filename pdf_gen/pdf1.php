<?php

if($pag=='pdf1' && isset($_SESSION["idut"]))
{

require('fpdf/fpdf.php');


$larghezza = "10";
$altezza = "25";
$formato = array($larghezza, $altezza);
$pdf = new FPDF('Landscape', 'cm', $formato);
$pdf->AddPage();

$pdf->SetAutoPageBreak(FALSE);
$pdf->SetFont('Arial','B',16);
$pdf->Image("pdf_gen/img/multi.png",0,0,7,3);
$pdf->SetX(7);
//Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
$pdf->Cell(6,1,'MOVIELAND CH Megalo Prenotazione',0,0,'L');
//central
$pdf->SetFont('Arial','I',9);
$pdf->SetX(0);
$pdf->SetY(5);
$pdf->Cell(6,1,"idut: ".$_SESSION["idut"],1,0,'L');
$pdf->Cell(6,1,"nome: ".$_SESSION["nome"],1,0,'L');
$pdf->Cell(6,1,"cognome: ".$_SESSION["cognome"],1,1,'L');
$pdf->SetX(0);
$pdf->SetY(6);
$pdf->Cell(6,1,"email: ".$_SESSION["email"],1,0,'L');
$pdf->Cell(6,1,"tel: ".$_SESSION["telefono"],1,0,'L');
$pdf->Cell(6,1,"Tariffa ridotta",1,0,'L');


//3 colonna

$pdf->Line(19,0,19,10);
$pdf->SetX(0);
$pdf->SetY(8);

//footer
$pdf->Line(0,8,19,8);
$pdf->SetX(0);
$pdf->SetY(8);
$pdf->SetFont('Arial','B',7);
$pdf->Cell(8,2,'Biglietto timbrabile una singola volta                                 tutti i diritti riservati',0,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(20.3,2);

$pdf->Cell(1,1,'BIGLIETTO ',0,0,'L');
$pdf->SetXY(20,3);
$pdf->Cell(1,1,'ACQUISTATO',0,0,'L');
$pdf->SetFont('Arial','I',12);
$pdf->SetXY(21.5,4);
$pdf->Cell(1,1,'Buona Visione',0,0,'C');

$pdf->Image("pdf_gen/img/qr.png",20,5.8,4,4);
$pdf->Output();

}
?>