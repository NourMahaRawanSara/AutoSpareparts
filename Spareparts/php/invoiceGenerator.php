<?php

require_once ('Model/BillModel.php');
require_once ('ConnectionToDB.php');

?>
<html>
<head>
<title>
    Invoice Generator
</title>
</head>
<body>
Select Invoice
<form method="get" action="invoice.php">
    <select name="InvoiceID">
        <?php
        $Invoice=new BillModel();
        $InID=$Invoice->View();
        for ($i=0; $i<=$InID; $i++){
            echo "<option
                value='".$Invoice->ID[$i]."'>".$Invoice->ID[$i]."
        </option>";
        }
        ?>
    </select>
    <input type="submit" value="Generate">
</form>
</body>
</html>
