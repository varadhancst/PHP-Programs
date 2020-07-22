<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>check the given no is prime or not</title>
  </head>
  <body>
    <form class="" action="checkisprime.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $flag = 0;
  if ($n <= 3) {
    $flag = 0;

  }
  else {
    for ($i=2; $i < $n/2; $i++) {
      if ($n % $i == 0) {

        $flag = 1;
        break;

      }
    }
  }


  if ($flag == 1) {
    echo "<br>The given no is not prime : ", $n;
  }else {
    echo "<br>The given no is prime : ", $n;
  }
}

 ?>
