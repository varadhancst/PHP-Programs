<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the sum of given digits </title>
  </head>
  <body>
    <form class="" action="digitsum.php" method="post">
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $r = $s = 0;
  while ($n > 0) {
    $r = $n % 10;
    $s = $s + $r;
    $n = $n / 10;
  }
  echo "The sum of digits is :", $s;
}

 ?>
