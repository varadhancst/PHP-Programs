<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given no is armstrong no or not</title>
  </head>
  <body>
    <form class="" action="checkarmstrong.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $r = $s = $t = 0;
  $t = $n;
  while ($n > 0) {
    $r = $n % 10;
    $s = $s + ($r * $r * $r);
    $n = $n / 10;
      }

  if ($s == $t) {
    echo "<br>The given no is armstrong : ", $t;
  }else {
    echo "<br>The given no is not armstrong : ", $t;
  }
}

 ?>
