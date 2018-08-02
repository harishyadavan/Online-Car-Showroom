<?php
require("fpdf/fpdf.php");
session_start();
$aa=$_SESSION['bp'];
$bb=$_SESSION['rt'];
$cc=$_SESSION['insu'];
$dd=$_SESSION['tl'];
$ee=$_SESSION['md'];
$ff=$_SESSION['vr'];
$gg=$_SESSION['cr'];
$hh=$_SESSION['bid'];
$ii=$_SESSION['userName'];
$jj=$_SESSION['userEmail'];
$kk=$_SESSION['add'];
$ll="images/signature.jpg";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','','16');
$pdf->Cell(0,10,"ONLINE CAR SHOWROOM",0,1,'C');
$pdf->Cell(0,10,"INVOICE NO. {$hh}",0,1,'C');
$pdf->Cell(50,10,"NAME ",0,0);
$pdf->Cell(50,10,"{$ii}",0,1);
$pdf->Cell(50,10,"Email ",0,0);
$pdf->Cell(50,10,"{$jj}",0,1);
$pdf->Cell(50,10,"ADDRESS ",0,0);
$pdf->Cell(10,10,"{$kk}",0,1);

$pdf->Cell(50,10,"CAR MODEL",0,0);
$pdf->Cell(50,10,"{$ee}",0,1);
$pdf->Cell(50,10,"VARIENT ",0,0);
$pdf->Cell(50,10,"{$ff}",0,1);
$pdf->Cell(50,10,"COLOR ",0,0);
$pdf->Cell(50,10,"{$gg}",0,1);

$pdf->Cell(70,10,"Basic ",1,0);
$pdf->Cell(70,10,"{$aa}",1,1);
$pdf->Cell(70,10,"Road Tax ",1,0);
$pdf->Cell(70,10,"{$bb}",1,1);
$pdf->Cell(70,10,"Insurence ",1,0);
$pdf->Cell(70,10,"{$cc}",1,1);
$pdf->Cell(70,10,"Total ",1,0);
$pdf->Cell(70,10,"{$dd}",1,1);

$pdf->SetX(150);
$pdf->Cell(10,10,$pdf->Image($ll),0,0);
$pdf->SetX(150);
$pdf->Cell(70,10,"Signature ",0,0);

$pdf->Output();

?>