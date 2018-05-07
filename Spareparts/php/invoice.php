<?php
require('fpdf181/fpdf.php');
require_once ('Model/BillModel.php');
require_once ('ConnectionToDB.php');

$TA = new BillModel();
$Bill = $TA->View();


for ($i=0; $i<=$Bill; $i++){
   // echo $TA->TotalAmount[$i];

}

$pdf = new FPDF ('p' , 'mm' , 'A4');
$pdf ->Addpage();






$pdf ->SetFont('Arial', 'B',14);
$pdf->Cell(130,5,'DELTA COMPANY',0,0);
$pdf->Cell(59,5,'INVOICE :',0,0);

$pdf->SetFont('Arial','',12);
/*$pdf->Cell(130,5,$TA->TotalAmount[0],0,0);*/
$pdf->Cell(59,5,'[Street Address]',0,1);

$pdf->Cell(130,5,'bsbs ;)',1,0);
$pdf->Cell(59,5,' l amoora',1,1);
$pdf->Output();


?>