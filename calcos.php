<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>program to calculate the cosine series</title>
  </head>
  <body>
    <form class="" action="calcos.php" method="post">
      <p>Enter the value for x: </p>
      <input type="number" name="x" value="">
      <p>Enter the value for n: </p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $x = $_POST['x'];
  $n = $_POST['n'];
  $t = 1;
  $sum = 1;
  $val = $x;
$x = $x * 3.14159 / 180 ;
for($i = 1 ; $i < $n + 1 ; $i++)
{
$t = $t * pow((double) (-1), (double) (2 * $i - 1)) *
$x * $x / (2 * $i * (2 * $i - 1)) ;
$sum = $sum + $t ;
}
echo "<br>Cosine value of $val is : ", $sum ;

}
 ?>
