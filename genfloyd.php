<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to generate Floyd's triangle</title>
  </head>
  <body>
      <form class="" action="genfloyd.php" method="post">
        <p>Enter the number of rows: </p>
        <input type="number" name="r" value="">
        <input type="submit" name="submit" value="submit">
      </form>
  </body>
</html>

<?php
if (isset($_POST['submit'])) {
  $r = $_POST['r'];
  $c = 1;
    echo "<br>Floyd's triange is: <br><br>";
    for($i = 0; $i < $r; $i++)
    {
    for($j = 0 ; $j <= $i ; $j++)
    {
    echo $c, "\t";
    $c++;
    }
    echo "<br> <br>";
    }
}
 ?>
