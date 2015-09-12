<?php
if (isset($_POST["quantity1"])) {
    $quantity = (int) $_POST["quantity1"];
}
else
{
    $quantity = 1;
    }
//die(var_dump($quantity,$_POST));
$item_price = 5.99;
printf("%d x item = $%.2f", $quantity,$quantity*$item_price);
?>

<form action="buy.php" METHOD=POST>
reload counts:
    <input name="quantity1" size=2 type="text" value="<?php echo $quantity; ?>">
    <input type=submit value="change">
</form>