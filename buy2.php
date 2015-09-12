<?php
if (isset($_POST["quantity1"])) {
    $quantity = settype($_POST["quantity1"], "integer");
}
else
{
    $quantity = 1;
    }
$item_price = 5.99;
printf("%d x item = $%.2f", $quantity,$quantity*$item_price);
?>