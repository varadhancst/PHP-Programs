<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find biggest amoung three numbers</title>
  </head>
  <body>
    <form class="" action="bigamoung3nums.php" method="post">
      <p>Enter the number 1 value :</p>
      <input type="number" name="num1" value="">
      <p>Enter the number 2 value :</p>
      <input type="number" name="num2" value="">
      <p>Enter the number 3 value :</p>
      <input type="number" name="num3" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $a = $_POST['num1'];
  $b = $_POST['num2'];
  $c = $_POST['num3'];
  echo " you entered the values : ", $a ," ", $b," ", $c, "<br>";
  if ($a > $b) {
      if ($a > $c) {
        echo "num1 is the biggest number", $a;

      }else {
        echo "num3 is the biggest number", $c;
      }
    }
      else {
        if ($c > $b) {
          echo "num3 is the biggest number", $c;
        }
        else {
          echo "num2 is the biggest number", $b;
        }
      }
  }
 ?>
