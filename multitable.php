<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>multitable</title>
    <style media="screen" type="text/css">
      table{
        border: 1px solid;
      }
    </style>
  </head>
  <body>
  <form class="" action="multitable.php" method="post">
    <p>Enter the start value :</p>
    <input type="number" name="from" value="">
    <p>Enter the last value :</p>
    <input type="number" name="end" value="">
    <br>
    <input type="submit" name="submit" value="submit">
  </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $from = $_POST['from'];
  $end = $_POST['end'];
  for ($i=$from; $i < $end ; $i++) {
    for ($j=$from; $j < $end ; $j++) {
    echo "  ", $i * $j;
        }
        echo "<br>";
      }
}
 ?>
