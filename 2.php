<?php
date_default_timezone_set("Europe/Minsk");
echo date("j F Y h:i:s");

$timesnap = mktime (date("G,i,s,j,n,Y"));
echo "<br>";
echo "$timesnap <br>";
echo date("d/m/Y H:i:s", $timesnap);
echo "<br>";
$timesnap +=17;
echo date("d/m/Y H:i:s", $timesnap);
echo "<br>";


$day=getdate();
switch ($day["wday"]) {
    case 0:
    case 6:
        echo "<h3>ITS&nbsp;A&nbsp;PARTY!!!!</h3>";
        break;
    default: echo "<h2>Hand and mind job</h2>";
}
echo "<H1>FORMS</H1>";

include "send_comment.php";

?>
<!--1<form action="send_comment.php" METHOD=POST> -->
<form action="2.php" METHOD=POST>
<Table style="border-size: 0px">
<Tr>
    <td>Your Name:</td>
    <td><input type="Text" NAME="name" Size = "30"/></td>
</tr>
<tr>
    <td>Your e:mail</td>
    <td><input type="Text" Name="email" Size="30"/></td>
</tr>
<tr>
    <td>Your Gender:</td>
        <td>
            <input type="Radio" Name="gender" Value="m" />MAN
            <input type="Radio" Name="gender" Value="w"/>WOMAN
        </td>
</tr>
<tr>
    <td>How you find us</td>
    <td>
        <select name="reffer">
        <option value="search">Finder server</option>
        <option value="tv">TV AD</option>
        <option value="bibo">Billboard</option>
        <option Selected value="other">Other</option>
        </select>
    </td>
</tr>
<tr>
    <td>May we contact with You?</td>
    <td><input type="Checkbox" name="may" Value="y" CHECKED/></td>
</tr>
<tr>
    <td>Comment</td>
    <td><textarea name="comments" cols="50" rows="4"></textarea></td>
</tr>
</table>
<input type="SUBMIT" value ="Send Query"/>
</form>

<a href="buy.php">next</a>