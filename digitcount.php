<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>find how many digits in the number :</title>
  </head>
  <body>
    <form class="" action="digitcount.php" method="post">
      <input type="number" name="num" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $num = $_POST['num'];
  echo "You entered this number: ", $num, "<br>";
  $result = strlen($num);
  echo "The number of digits are: ", $result;
  }

 ?>
