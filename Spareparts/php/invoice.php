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

$pdf ->SetFont('Arial', '',12);
//$pdf->Cell(130,5,'[Street Address]',0,0);
$pdf->Cell(59,5,'',0,1);


$pdf->Cell(130,5,'[City, Country, Zip Address]',0,0);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,'[dd/mm/yyy]',0,1);

$pdf->Cell(130,5,'Phone[+12552214]',0,0);
$pdf->Cell(25,5,'Inovice #',0,0);
$pdf->Cell(34,5,'[12345678]',0,1);


$pdf->Cell(130,5,'Fax[+12552214]',0,0);
$pdf->Cell(25,5,'Customer ID',0,0);
$pdf->Cell(34,5,'[12345678]',0,1);


$pdf->Cell(189,10,'',0,1);

$pdf->Cell(100,5,'Bill to',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,'[Name]',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,'[Company Name]',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,'[Address]',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,'[phone]',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,'[Salesman Name]',0,1);



$pdf->Cell(109,10,'',0,1);

$pdf->Cell(130,5,'Description',1,0);
$pdf->Cell(25,5,'Taxable',1,0);
$pdf->Cell(34,5,'Amount',1,1);

$pdf->SetFont('Arial','',12);


$pdf->Cell(130,5,'5artoom',1,0);
$pdf->Cell(25,5,'-',1,0,'R');
$pdf->Cell(34,5,'500',1,1, 'R');


$pdf->Cell(130,5,'kora',1,0);
$pdf->Cell(25,5,'-',1,0,'R');
$pdf->Cell(34,5,'2,000',1,1, 'R');

$pdf->Cell(130,5,'balljoint',1,0);
$pdf->Cell(25,5,'-',1,0,'R');
$pdf->Cell(34,5,'1,000',1,1,'R');


$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Subtotal',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,'200',1,1,'R');

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Taxable',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,'0',1,1,'R');


$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Tax Rate',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,'10%',1,1,'R');


$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Total Due',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,'4,400',1,1,'R');




/*$pdf->SetFont('Arial','',12);
/*$pdf->Cell(130,5,$TA->TotalAmount[0],0,0);


$pdf->Cell(130,5,'bsbs ;)',1,0);
$pdf->Cell(59,5,' l amoora',1,1); */
$pdf->Output();


?>