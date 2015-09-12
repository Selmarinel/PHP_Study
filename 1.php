<?php
date_default_timezone_set("Europe/Minsk");
$hour = date("H");
if ($hour < 12)
    {
        echo "Good morning";

    }
elseif ($hour<17)
    {
        echo "Good day, sir";
    }
else
    {
        echo "Good afternoon";
    }
    
   $name = "Antom";
   echo "<br>";
   if (isset($_POST["name"]))
   {
       $name = $_POST["name"];
   }
  ?>
<form action="1.php" Method=POST>
<input type="text" name="name"  value="<?php echo $name ?>"/>
<input type="submit" value="Friend or not friend?"/>
</form>
<?php
  switch ($name)
  {
      case "Dima":
      case "Yura":
      case "Yarik":
        echo "$name, you are my friend";
        break;
      case "Gena":
      case "Antom":
        echo "$name, you are strange";
        break;
      default:
        echo "Who are you? $name";
  }

  printf('<br>');
  echo "Recursy <hr>";
$num=1;
if (isset($_POST["num"]))
{
    $num = (int) $_POST["num"];
}
?>
<form action="1.php" Method=POST>
<input type="text" name="num" value="<?php echo $num ?>"/>
<input type="submit" value="account factorial"/>
</form>
<?php
//class test
include_once "tax.php";
echo factorial($num);
echo "equal " . fac2($num+1) . "<br>";
$value=100;
display_value();
change_value();
echo "After: $value <br>";
echo "Concatenation <hr>";
$phrase = "I want";
$phrase .=" change ";
$phrase .="this world ";
$phrase .="And destoy all humans. ";
$phrase .="<br><i>Bender</i> (c)";
echo $phrase;

echo "<hr>Printf<hr>";
$price = 169.99;
printf("Price: %f", $price);
$a=0.1;
$b=0.2;
$c=$a+$b;
echo "<br>lirik  $c";
echo "<br>";
printf("Price: %b", $price);
echo "<br>";
printf("Price: %c", $price);
echo "<br>";
printf("Price: %d", $price);
echo "<br>";
printf("Price: %e", $price);
echo "<br>";
printf("Price: %u", $price);
echo "<br>";
printf("Price: %o", $price);
echo "<br>";
printf("Price: %s", $price);
echo "<br>";
printf("Price: %X", $price);
echo "<br>";

$name1="Yuriy";
$name2="Arsenii";
$name3="Leoreon";
echo "<PRE>";
printf ("%10s \n", $name1);
printf ("%10s \n", $name2);
printf ("%10s \n", $name3);
echo "</PRE>";

$phrase = "Love PHP";
echo strtoupper($phrase) . "<br>";
echo strtolower($phrase) . "<br>";

$phrase .= " and my girlfriend, and dogs, and nature";
echo ucwords($phrase) . "<br>";

echo "<hr> ARRAYS <hr>";
$temps = arraY("goi" => 38,5,56,24,67,2,"wah_wah" => 675,12,6,2,4,6,2,5,6,4,5,"and_this" => 545,234 );
asort($temps);
print "<PRE>";
print_r($temps);
print "</Pre>";
echo "or see this one <br>";
while ( list ($key, $value)= each ($temps))
{
    echo "key = $key has value =  $value <br>";
}

$temps[wah_wah] +=$temps[and_this]+1;
printf ("wah wah and this in sum and +1 = ");print($temps[wah_wah]);

$opi = array(6,34,52,34,6,2345,234,24,54,6,23);
echo "<hr>";
print "<PRE>";
print_r(array_intersect($temps,$opi));
print "</PRE>";

echo "<hr>";
print "<PRE>";
$merged=array_merge($temps,$opi);
asort($merged);
print_r($merged);
print "</PRE>";
echo count($merged) . "<br>";
echo serialize($temps);
//unserialize($temps);
if (array_key_exists("wah_wah", $temps) && array_key_exists("wah_wah", $merged))
{
    echo "<h1>EXISTS!</h1>";
}
echo "<hr><h1>CLASS</h1></hr>";
include "class_lib.php";
$myObject = new myClass;
$myObject -> myMethod();
$myObject -> myValue = "Robert";
$myObject -> myMethod();
  ?>
