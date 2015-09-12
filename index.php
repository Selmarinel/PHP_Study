
<?php
//$username="Admin";
//$pass="masterkey";
if (($_POST["user"]==="Admin") && ($_POST["pass"]==="masterkey"))
{
    echo "<PRE>";
    echo "You are aauth now!";
    echo "<br/> " . $_POST["user"];
    echo "<br/>"  . $_POST["pass"];
    echo "</PRE>";
} else
{
    $io=$_POST["go"];
    if (isset($io)){echo "<h1>Incorect pass or login</h1>"; }
    echo "<form action='index.php' METHOD=POST>
    Login:<input type='text' name ='user' />
    <br>";
    echo "
    Password:<input type='text' name = 'pass' />
    <br>";
    echo "<input type = 'submit' id='go' name = 'go'/>";
    echo "</form>";
}
?>
