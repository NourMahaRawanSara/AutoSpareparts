<?php
require_once "../ConnectionToDB.php";
require_once "../Model/BillModel.php";
$idarray=null;
$totalarray=[];
$bill = new BillModel();
$x = $bill->calc_stat();
$counter =0;
for($i=0;$i<$x;$i++)
{
    $totalarray[$bill->ID[$i]]=null; // de 3ashan kan bytla3 error fe line 26
    for ($j=$i+1;$j<=$x;$j++) {
        //echo"j=>".$j;
        if ($bill->ID[$i] == $bill->ID[$j]) {
            $totalarray[$bill->ID[$i]] =   $bill->TotalAmount[$j] + $bill->TotalAmount[$i]+ $totalarray[$bill->ID[$i]];
            array_splice($bill->ID, $j, 1);
            array_splice($bill->TotalAmount, $j, 1);  // bymsa7 el id el metkrar ba3d ma ba5od el total bet3o
            $x--;
        }
    }
}
for($i=0;$i<count($totalarray);$i++)
{
    if($i==$counter-1) {
        echo $bill->ID[$i] . "~" . $totalarray[$bill->ID[$i]];
    }
    else{
        echo $bill->ID[$i] . "~" . $totalarray[$bill->ID[$i]].'%%';
    }
}
?>