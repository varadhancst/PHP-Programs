<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Programs to calculate Exponential series</title>
  </head>
  <body>
    <form class="" action="calexp.php" method="post">
      <p>Enter the value for x: </p>
      <input type="number" name="x" value="">
      <p>Enter the value for n:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $x = $_POST['x'];
  $n = $_POST['n'];
  $sum = 1;
  $t = 1;
  for($i = 1; $i < $n + 1; $i++)
  {
  $exp = $i;
  $t = $t * $x / $exp;
  $sum = $sum + $t;
  }
  echo "<br>Exponential Value of ", $x ," is : ", $sum;

}
 ?>
