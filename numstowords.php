<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <form class="" action="numstowords.php" method="post">
        <p>Enter a number: </p>
        <input type="number" name="n" value="">
        <input type="submit" name="submit" value="submit">
      </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
$n = $_POST['n'];
echo "you have entered: ", $n;
$a = array(10);
$c = 0;
while ($n > 0) {
  $a[$c] = $n % 10;
  $n = $n / 10;
  $c++;
}
for($i = $c-1; $i >=0 ; $i--)
{
switch ($a[$i]) {

case 1:
echo "\tONE";
break;
case 2:
echo "\tTWO";
break;
case 3:
echo "\tTHREE";
break;
case 4:
echo "\tFOUR";
break;
case 5:
echo "\tFIVE";
break;
case 6:
echo "\tSIX";
break;
case 7:
echo "\tSEVEN";
break;
case 8:
echo "\tEIGHT";
break;
case 9:
echo "\tNINE";
break;
case 10:
echo "\tTEN";
break;
case 0:
echo "\tZERO";
break;
default:
echo "\tInvalid input. ";
break;
}}
}
 ?>
