<?php
$uploadfile = "upload/".basename($_FILES["upload"]["name"]);
if (copy($_FILES["upload"]["tmp_name"],$uploadfile))
{
    echo "<h3>Upload complete</h3>";
}
else
{
    echo "<h3>Error</h3>";
}

echo $uploadfile . "<br>";
echo (int) file_exists($_FILES["upload"]["tmp_name"]) ."<br>";
echo $_FILES["upload"]["tmp_name"];
?>
