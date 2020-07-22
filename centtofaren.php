<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>convert temprature in centigrade to farenheit</title>
  </head>
  <body>
    <form class="" action="centtofaren.php" method="post">
      <p>Enter the centigrade: </p>
      <input type="number" name="c" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $c = $_POST['c'];
  echo "<br>you have entered: ", $c, "<br>";
  $f = (1.8 * $c + 32);
  echo "<br>The farenheit is : ", $f;
}
 ?>
