<?php
require('../fpdf181/fpdf.php');
//require_once ('../Model/BillModel.php');
//require_once ('../Model/UserModel.php');
//require_once ('../Model/ImporterTypeModel.php');
require_once ('../Model/OrderModel.php');
require_once ('../ConnectionToDB.php');

$OrderID=$_REQUEST['InvoiceID'];
session_start();

$Order = new OrderModel();
$x = $Order->invoices($OrderID);


//for ($i=0; $i<=$Bill; $i++){
//   // echo $TA->TotalAmount[$i];
//
//}


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
$pdf->Cell(34,5,$Order->DateOfOrder[$x],0,1);

$pdf->Cell(130,5,'Phone[+12552214]',0,0);
$pdf->Cell(25,5,'Invoice #',0,0);
$pdf->Cell(34,5,$Order->ID[$x],0,1);


//$pdf->Cell(130,5,'Fax[+12552214]',0,0);
$pdf->Cell(25,5,'Customer ID',0,0);
$pdf->Cell(34,5,"",0,1);


$pdf->Cell(189,10,'',0,1);

$pdf->Cell(100,5,'Bill Information',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,$Order->OrderTypeID[$x],0,1);

//$pdf->Cell(10,5,'',0,1);
//$pdf->Cell(90,0,'[Address]',0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,"",0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,"",0,1);

$pdf->Cell(10,5,'',0,1);
$pdf->Cell(90,0,'[Salesman Name]',0,1);



$pdf->Cell(109,10,'',0,1);

$pdf->Cell(130,5,'Description',1,0);
$pdf->Cell(25,5,'Taxable',1,0);
$pdf->Cell(34,5,'Amount',1,1);

$pdf->SetFont('Arial','',12);


$pdf->Cell(130,5,$Order->SparepartID[$x],1,0);
$pdf->Cell(25,5,'-',1,0,'R');
$pdf->Cell(34,5,"PRICE",1,1, 'R');


$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Subtotal',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,"SUBTOTAL",1,1,'R');



$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Tax Rate',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,'5%',1,1,'R');


$pdf->Cell(130,5,'',0,0);
$pdf->Cell(25,5,'Total Due',0,0);
$pdf->Cell(8,5,'egp',1,0);
$pdf->Cell(26,5,"TOTAL",1,1,'R');




/*$pdf->SetFont('Arial','',12);
/*$pdf->Cell(130,5,$TA->TotalAmount[0],0,0);


$pdf->Cell(130,5,'bsbs ;)',1,0);
$pdf->Cell(59,5,' l amoora',1,1); */
$pdf->Output();


?>