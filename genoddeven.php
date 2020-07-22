<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>generate the odd and even number for given number</title>
  </head>
  <body>
    <form class="" action="genoddeven.php" method="post">
      <p>Enter the limit:</p>
      <input type="number" name="n" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $n = $_POST['n'];
  echo "entered number is: ", $n, "<br>";
  $osum = 0;
  echo "odd numbers are:";
  for ($i=0; $i <= $n; $i++) {
    if ($i % 2 == 1) {
      echo $i, "\t";
      $osum = $osum + $i;
    }
  }
  echo "<br>sum of odd numbers are :", $osum;
  $esum = 0;
  echo "<br>even numbers are:";
  for ($i=0; $i <= $n; $i++) {
    if ($i % 2 == 0) {
      echo $i, "\t";
      $esum = $esum + $i;
    }
  }
  echo "<br>sum of even numbers are :", $esum;
}
 ?>
