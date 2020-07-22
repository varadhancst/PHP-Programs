<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Find LCM and GCD of the given numbers</title>
  </head>
  <body>
    <form class="" action="findlcmgcd.php" method="post">
      <p>Enter the n1 value: </p>
      <input type="number" name="n1" value="">
      <p>Enter the n2 value: </p>
      <input type="number" name="n2" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $n1 = $_POST['n1'];
  $n2 = $_POST['n2'];
  echo "<br>Entered values are: n1= ", $n1 ,";\t n2= ",  $n2;
  $prod = $n1 * $n2;
  while($n1 != $n2)
{
if($n1 > $n2)
$n1 = $n1 - $n2;
if($n2 > $n1)
$n2 = $n2 - $n1;
}
$gcd = $n1;
$lcm = $prod / $gcd;
echo "<br>The GCD is : " , $gcd;
echo "<br>The LCM is : ", $lcm;
}
 ?>
