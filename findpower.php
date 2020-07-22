<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the power value of given number</title>
  </head>
  <body>
    <form class="" action="findpower.php" method="post">
      <p>Enter the value of X: </p>
      <input type="number" name="x" value="">
      <p>Enter the value of N: </p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {

  $x = $_POST['x'];
  $n = $_POST['n'];
  $count = 1;
  $sum = 1;
  while ($count <= $n) {
    $sum = $sum * $x;
    $count++;
    }
  echo "<br>The power of $x^$n is: ", $sum;
}
 ?>
