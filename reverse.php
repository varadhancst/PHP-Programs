<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the reverse for given digit</title>
  </head>
  <body>
    <form class="" action="reverse.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="number" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['number'];
  echo "Entered number is :", $n;
  $s = 0;
  $r = 0;
    while ($n > 1) {
    $r = $n % 10 ;
    $s = $r + $s * 10 ;
    $n = $n / 10 ;
  }
  echo " <br> The reverse number is :", $s;
}
 ?>
