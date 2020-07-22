<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given no is odd or even</title>
  </head>
  <body>
    <form class="" action="checkoddeven.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  if ($n % 2 == 0) {
    echo "<br>The given no is even : ", $n;
  }else {
    echo "<br>The given no is odd : ", $n;
  }
}

 ?>
