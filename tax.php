<?php
function factorial(&$num)
  {
    $re=1;
    for ($i = 1;$i <= $num; $i++)
    {
        $re = $re * $i;

    }
     echo "equal $re <br>";
  }
function fac2($x)
{
    if ($x === 0) return 1;
    else return $x*fac2($x-1);
}

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
