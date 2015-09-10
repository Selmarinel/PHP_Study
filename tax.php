<?php
function factorial(&$num)
  {
    $re=1;
    for ($i = 1;$i <= $num; $i++)
    {
        $re = $re * $i;

    }
     echo "this $re <br>";
  }
function fac2($x)
{
    if ($x === 0) return 1;
    else return $x*fac2($x-1);
}
$nu=6;
factorial($nu);
echo "and this ", fac2(7), "<br>";

function display_value()
{
    echo $value;
}

function change_value()
{
    global $value;
    echo "Before: $value <br>";
    $value = $value * 2;
}
?>
