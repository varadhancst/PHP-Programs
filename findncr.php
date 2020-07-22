<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>program to find NCR value of the given numbers</title>
  </head>
  <body>
    <form class="" action="findncr.php" method="post">
      <p>Enter the value for N: </p>
      <input type="number" name="n" value="">
      <p>Enter the value for R: </p>
      <input type="number" name="r" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $r = $_POST['r'];
  function fact($i)
  {
    $x;
    if ($i == 0) {
      return 1;
    }else {
      $x = $i * fact($i-1);
      return $x;
    }
  }
  if ($n >= $r) {
    $ncr = fact($n) / (fact($n-$r) * fact($r));
    echo ("<br>The NCR value is : ");
    echo $ncr;
  }else {
    echo "<br>Calculating NCR value is not possible";
  }

}
 ?>
