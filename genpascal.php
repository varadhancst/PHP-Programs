<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Program to generate Pascal's triangle</title>
  </head>
  <body>
    <form class="" action="genpascal.php" method="post">
      <p>Enter the number of rows: </p>
      <input type="number" name="p" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  $p = $_POST['p'];
  $q = 0;
  echo "<br>Pascal's triangle is: <br>";
  while ($q < $p)
  {
  for($r = 40 - 3 * $q ; $r > 0 ; --$r)
  echo " ";
  for($x = 0 ; $x <= $q ; ++$x)
  {
  if(($x == 0) || ($q == 0))
  $b = 1 ;
  else
  $b = ($b * ($q - $x + 1)) / $x ;
  echo $b , " ";
  }
  echo ("<br>") ;
  ++$q ;
  }
}
 ?>
