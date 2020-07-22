<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find the sum of fibonacci series</title>
  </head>
  <body>
    <form class="" action="sumfibonacci.php" method="post">

      <p>Enter the limit: </p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  $a = -1; $b = 1; $c = $sum = 0;
  echo "The fibonacci series is: <br> ";
  for ($i=1; $i <= $n ; $i++) {
    $c = $a + $b;
    echo $c, " ";
    $sum = $sum + $c;
    $a = $b;
    $b = $c;
  }
  echo "<br>The sum of fibonacci series is: ", $sum;
}
 ?>
