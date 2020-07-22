<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the divisors for the given number</title>
  </head>
  <body>
    <form class="" action="divisors.php" method="post">
      <p>Enter the number:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  echo "the number is : ", $n, "<br>";
  for ($i=1; $i <= $n ; $i++) {
    if ($n % $i == 0) {
      echo $i,"\t";
    }
  }
}

 ?>
