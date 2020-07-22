<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given no is perfect or not</title>
  </head>
  <body>
    <form class="" action="checkperfectno.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $s = 0;
  for ($i=1; $i < $n; $i++) {
    if ($n % $i == 0) {
      $s = $s + $i;
    }
  }
  if ($s == $n) {
    echo "<br>The given no is perfect : ", $n;
  }else {
    echo "<br>The given no is not perfect : ", $n;
  }
}

 ?>
