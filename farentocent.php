<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>convert temprature in farenheit to centigrade</title>
  </head>
  <body>
    <form class="" action="farentocent.php" method="post">
      <p>Enter the farenheit: </p>
      <input type="number" name="f" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $f = $_POST['f'];
  echo "<br>you have entered: ", $f, "<br>";
  $c = ($f - 32)/1.8;
  echo "<br>The centigrade is: ", $c;
}
 ?>
