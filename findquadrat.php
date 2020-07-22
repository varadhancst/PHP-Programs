<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the roots of quadratic equation</title>
  </head>
  <body>
    <form class="" action="findquadrat.php" method="post">
      <input type="number" name="a" value="">
      <input type="number" name="b" value="">
      <input type="number" name="c" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $a = $_POST['a'];
  $b = $_POST['b'];
  $c = $_POST['c'];
  echo "you have entered this values: <br>",$a, "<br>",$b,"<br>",$c;
  if ($a !=0) {
  $d = ($b * $b - 4 * $a * $c);
  echo "<br>",$d;
  if($d < 0)
  {
  echo "<br>Roots are imaginary";
  $real = - $b / (2 * $a);
  $d = - $d;
  $n = pow((double) $d, (double) 0.5);
  $imag = $n / (2 * $a);
  echo "<br>r1 = ", $real," + ", $imag;
  echo "<br>r2 = ", $real," + ", $imag;
  }
  if($d == 0)
  {
    echo "<br>Roots are real and equal";
    $r1 = - $b / (2 * $a);
    echo "<br>r1 = r2 = ", $r1;
  }
  if($d > 0)
  {
    echo "<br>Roots are real and unequal";
    $r1 = (- $b + sqrt((double) $d)) / (2 * $a);
    $r2 = (- $b - sqrt((double) $d)) / (2 * $a);
    echo "<br>r1 = ",$r1;
    echo "<br>r2 = ",$r2;
  }
  }
  else {
    echo "<br>Equation is linear";
  }
}
 ?>
