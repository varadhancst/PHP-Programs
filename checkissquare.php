<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given no is square or not</title>
  </head>
  <body>
    <form class="" action="checkissquare.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $m;
  $p = sqrt($n);
  $m = $p;
    if ($p == floor($m)) {
    echo "<br>The given no is square : ", $n;
  }else {
    echo "<br>The given no is not square : ", $n;
  }
}

 ?>
