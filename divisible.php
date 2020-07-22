<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given no is divisible by given another number </title>
  </head>
  <body>
    <form class="" action="divisible.php" method="post">
      <p>Enter the limit :</p>
      <input type="number" name="n" value="">
      <p>Enter the divisible number:</p>
      <input type="number" name="d" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $d = $_POST['d'];

  for ($i=1; $i <= $n ; $i++) {
    if ($i % $d == 0) {
      echo $i , "<br>";
    }
  }
  }

 ?>
